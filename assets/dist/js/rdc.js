jQuery(document).ready(function ($) {
  //custom rdcircles scripts

  /* init functions */
  revealPosts();

  /* variable decalarations */
  var last_scroll = 0;

  /* carousel functions */
  $(document).on("click", ".rdcircles-carousel-thumb", function () {
    var id = $("#" + $(this).attr("id"));
    $(id).on("slid.bs.carousel", function () {
      rdcircles_get_bs_thumbs(id);
    });
  });

  $(document).on("mouseenter", ".rdcircles-carousel-thumb", function () {
    var id = $("#" + $(this).attr("id"));
    rdcircles_get_bs_thumbs(id);
  });

  function rdcircles_get_bs_thumbs(id) {
    var nextThumb = $(id)
      .find(".item.active")
      .find(".next-image-preview")
      .data("image");
    var prevThumb = $(id)
      .find(".item.active")
      .find(".prev-image-preview")
      .data("image");
    $(id)
      .find(".right.carousel-control")
      .find(".thumbnail-container")
      .css({ "background-image": "url(" + nextThumb + ")" });
    $(id)
      .find(".left.carousel-control")
      .find(".thumbnail-container")
      .css({ "background-image": "url(" + prevThumb + ")" });
  }

  /* Ajax functions */
  $(document).on("click", ".rdcircles-load-more:not(.loading)", function () {
    var that = $(this);
    var page = $(this).data("page");
    var newPage = page + 1;
    var ajaxurl = that.data("url");
    var prev = that.data("prev");
    var archive = that.data("archive");

    if (typeof prev === "undefined") {
      prev = 0;
    }

    if (typeof archive === "undefined") {
      archive = 0;
    }

    that.addClass("loading").find(".text").slideUp(320);
    that.find(".rdcircles-icon").addClass("spin");

    $.ajax({
      url: ajaxurl,
      type: "post",
      data: {
        page: page,
        prev: prev,
        archive: archive,
        action: "rdcircles_load_more",
      },
      error: function (response) {
        console.log(response);
      },
      success: function (response) {
        if (response == 0) {
          $(".rdcircles-posts-container").append(
            '<div class="text-center m-4"><h3>You checked almost everything! Thank you.</h3><p>No more posts to load.</p></div>'
          );
          that.slideUp(320);
        } else {
          setTimeout(function () {
            if (prev == 1) {
              $(".rdcircles-posts-container").prepend(response);
              newPage = page - 1;
            } else {
              $(".rdcircles-posts-container").append(response);
            }

            if (newPage == 1) {
              that.slideUp(320);
            } else {
              that.data("page", newPage);

              that.removeClass("loading").find(".text").slideDown(320);
              that.find(".rdcircles-icon").removeClass("spin");
            }

            revealPosts();
          }, 1000);
        }
      },
    });
  });

  /* scroll function */
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (Math.abs(scroll - last_scroll) > $(window).height() * 0.1) {
      last_scroll = scroll;

      $(".page-limit").each(function (index) {
        if (isVisible($(this))) {
          history.replaceState(null, null, $(this).attr("data-page"));
          return false;
        }
      });
    }
  });

  /* helper functions */
  function revealPosts() {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    var posts = $("article:not(.reveal)");
    var i = 0;

    setInterval(function () {
      if (i >= posts.length) return false;

      var el = posts[i];
      $(el).addClass("reveal").find(".rdcircles-carousel-thumb").carousel();

      i++;
    }, 200);
  }

  function isVisible(element) {
    var scroll_pos = $(window).scrollTop();
    var window_height = $(window).height();
    var el_top = $(element).offset().top;
    var el_height = $(element).height();
    var el_bottom = el_top + el_height;
    return (
      el_bottom - el_height * 0.25 > scroll_pos &&
      el_top < scroll_pos + 0.5 * window_height
    );
  }

  /* contact form submission */
  $("#rdcirclesContactForm").on("submit", function (e) {
    e.preventDefault();

    $(".has-error").removeClass("has-error");
    $(".js-show-feedback").removeClass("js-show-feedback");

    var form = $(this),
      name = form.find("#name").val(),
      email = form.find("#email").val(),
      message = form.find("#message").val(),
      ajaxurl = form.data("url");

    if (name === "") {
      $("#name").parent(".form-group").addClass("has-error");
      return;
    }

    if (email === "") {
      $("#email").parent(".form-group").addClass("has-error");
      return;
    }

    if (message === "") {
      $("#message").parent(".form-group").addClass("has-error");
      return;
    }

    form.find("input, button, textarea").attr("disabled", "disabled");
    $(".js-form-submission").addClass("js-show-feedback");

    $.ajax({
      url: ajaxurl,
      type: "post",
      data: {
        name: name,
        email: email,
        message: message,
        action: "rdcircles_save_user_contact_form",
      },
      error: function (response) {
        $(".js-form-submission").removeClass("js-show-feedback");
        $(".js-form-error").addClass("js-show-feedback");
        form.find("input, button, textarea").removeAttr("disabled");
      },
      success: function (response) {
        if (response == 0) {
          setTimeout(function () {
            $(".js-form-submission").removeClass("js-show-feedback");
            $(".js-form-error").addClass("js-show-feedback");
            form.find("input, button, textarea").removeAttr("disabled");
          }, 1500);
        } else {
          setTimeout(function () {
            $(".js-form-submission").removeClass("js-show-feedback");
            $(".js-form-success").addClass("js-show-feedback");
            form.find("input, button, textarea").removeAttr("disabled").val("");
          }, 1500);
        }
      },
    });
  });
});

// Script for Hero Section Video - Play Button
window._wq = window._wq || [];
_wq.push({
  id: "os7etyvwn1",
  onReady: function (video) {
    var playButton = document.getElementById("custom-play-button");
    var videoContainer = document.getElementById("wistia-container");

    playButton.addEventListener("click", function () {
      video.play();
    });

    video.bind("play", function () {
      playButton.style.display = "none";
    });

    video.bind("pause", function () {
      playButton.style.display = "block";
    });

    video.bind("end", function () {
      playButton.style.display = "block";
    });

    videoContainer.addEventListener("click", function (e) {
      if (e.target === playButton || playButton.contains(e.target)) {
        return;
      }
      if (video.state() === "playing") {
        video.pause();
      } else {
        video.play();
      }
    });
  },
});

// Script for word changing for life role
const roles = [
  "Sporty",
  "Visionary",
  "Investor",
  "Traveler",
  "Meditator",
  "Reader",
  "Yogi",
];

let index = 0;

function changeLifeRole() {
  const lifeRoleElement = document.getElementById("life-role");
  lifeRoleElement.style.width = "0";
  setTimeout(() => {
    lifeRoleElement.textContent = roles[index];
    lifeRoleElement.style.width = "";
    index = (index + 1) % roles.length;
  }, 200);
}

setInterval(changeLifeRole, 3000);

// Share this option
document.addEventListener("DOMContentLoaded", function () {
  const copyLinks = document.querySelectorAll(".copy-link");

  copyLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const url = this.getAttribute("data-link");

      navigator.clipboard
        .writeText(url)
        .then(() => {
          alert("Link copied to clipboard!");
        })
        .catch((err) => {
          console.error("Failed to copy: ", err);
        });
    });
  });
});

// Newsletter Popup Form in Single page
document.addEventListener("DOMContentLoaded", function () {
  var popup = document.getElementById("newsletter-popup");
  var closeButton = document.getElementById("close-popup");
  var noThanksButton = document.getElementById("no-thanks");

  function showPopup() {
    popup.style.display = "flex";
  }

  function hidePopup() {
    popup.style.display = "none";
  }

  // Show the newsletter popup after 5 seconds
  setTimeout(showPopup, 5000);

  // Close popup when close button is clicked
  closeButton.addEventListener("click", hidePopup);
  noThanksButton.addEventListener("click", hidePopup);

  // Close popup when clicking outside the content
  popup.addEventListener("click", function (event) {
    if (event.target === popup) {
      hidePopup();
    }
  });
});
