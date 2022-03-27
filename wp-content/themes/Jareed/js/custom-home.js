$(document).ready(function () {
  AOS.init({
    once: true,
  });
  $("#l1").click(() => {
    $("#r1").trigger("click");
  });
  $("#l2").click(() => {
    $("#r2").trigger("click");
  });
  $("#l3").click(() => {
    $("#r3").trigger("click");
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 20) {
      $(".banner").css("height", "70vh");
      $(".banner").addClass("fade-in-image");
      $(".aboutus").addClass("fade-in-image");
    }
  });
  // setTimeout(function () {
  //   $(".banner").css("height", "50vh");
  //   $(".banner").addClass("fade-in-image");
  //   $(".aboutus").addClass("fade-in-image");
  // }, 3000);
  $(function () {
    $("input.timepicker").timepicker({
      timeFormat: "h:mm p",
      minTime: "8:00am",
      maxTime: "11:30pm",
      // maxHour: 23,
      startTime: new Date(0, 0, 0, 8, 00, 0),
      interval: 60,
      dynamic: false,
    });
  });
  $('[data-toggle="datepicker"]').datepicker({
    format: "yyyy-mm-dd",
  });
  $(".booking-fixed").hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 175) {
      console.log($(this).scrollTop());
      if ($(window).width() >= 1290) {
        // $(".booking-nav").hide();
      } else {
        $(".booking-nav").hide();
        $(".booking-nav1").show();
      }
      // $("nav").show();
      // $("nav").addClass("fade-in-image");

      $(".booking-form-fixed").addClass("fixed-top");
      $(".booking-form-fixed").addClass("fade-in");
      $(".booking-fixed").show();
    }
    if ($(this).scrollTop() < 175) {
      console.log($(this).scrollTop());

      if ($(window).width() >= 1290) {
        $(".booking-nav").show();
      } else {
        $(".booking-nav").hide();
        $(".booking-nav1").show();
      }
      // $("nav").hide();
      // $("nav").removeClass("fade-in-image");
      $(".booking-form-fixed").removeClass("fixed-top");
      $(".booking-form-fixed").removeClass("fade-in");
      $(".booking-fixed").hide();
    }
    if ($(this).scrollTop() > 100) {
      $("nav").css("background-color", "#c7b283");
      $("nav").show();
      $(".navbar-container").css("background-color", "#c7b283");
      $("nav").addClass("fade-in-image");
      // $(".banner").css("height", "50vh");
      // $(".aboutus").addClass("fade-in-about");
      // $(".banner").removeClass("fade-in-image");
    } else {
      $("nav").css("background-color", "#c7b283");
      // $("nav").hide();
      $(".navbar-container").css("background-color", "#c7b283");
      $("nav").removeClass("fade-in-image");
      // $(".banner").css("height", "100vh");
      // $(".aboutus").removeClass("fade-in-about");
      // $(".banner").addClass("fade-in-image");
    }
  });
  // $(".booking-nav span").click(function () {
  //   if ($(this).hasClass("arabic")) {
  //     $(this).removeClass("arabic");
  //     $(this).addClass("english");
  //     $(this).html("ENGLISH");
  //   } else {
  //     $(this).removeClass("english");
  //     $(this).addClass("arabic");
  //     $(this).html("عربي");
  //   }
  // });
  // $(".booking-nav1 span").click(function () {
  //   if ($(this).hasClass("arabic")) {
  //     $(this).removeClass("arabic");
  //     $(this).addClass("english");
  //     $(this).html("ENGLISH");
  //   } else {
  //     $(this).removeClass("english");
  //     $(this).addClass("arabic");
  //     $(this).html("عربي");
  //   }
  // });
  // $(".overview").addClass('d-flex');
  // $(".overview-tab").addClass("active");
  // $(".amenities").addClass('d-none');
  // $(".in-room-media").addClass('d-none')
  // $(".floor-plan").addClass('d-none');
  // $(".overview-tab").click(function(){
  //     $(".overview").addClass('d-flex');
  //     $(".overview").addClass("active");
  //     $(".amenities").removeClass('d-flex');
  //     $(".amenities").addClass('d-none');
  //     $(".amenities-tab").removeClass('active');
  //     $(".in-room-media").removeClass('d-flex');
  //     $(".in-room-media").addClass('d-none');
  //     $(".in-room-media-tab").removeClass('active');
  //     $(".floor-plan").removeClass('d-flex');
  //     $(".floor-plan").addClass('d-none');
  //     $(".floor-plan-tab").removeClass('active');
  // }) ;
  // $(".amenities-tab").click(function(){
  //     $(".amenities").addClass('d-flex');
  //     $(".amenities-tab").addClass("active");
  //     $(".overview").removeClass('d-flex');
  //     $(".overview").addClass('d-none');
  //     $(".overview-tab").removeClass('active');
  //     $(".in-room-media").removeClass('d-flex');
  //     $(".in-room-media").addClass('d-none');
  //     $(".in-room-media-tab").removeClass('active');
  //     $(".floor-plan").removeClass('d-flex');
  //     $(".floor-plan").addClass('d-none');
  //     $(".floor-plan-tab").removeClass('active');
  // }) ;
  // $(".in-room-media-tab").click(function(){
  //     $(".in-room-media").addClass('d-flex');
  //     $(".in-room-media-tab").addClass("active");
  //     $(".overview").removeClass('d-flex');
  //     $(".overview").addClass('d-none');
  //     $(".overview-tab").removeClass('active');
  //     $(".amenities").removeClass('d-flex');
  //     $(".amenities").addClass('d-none');
  //     $(".amenities-tab").removeClass('active');
  //     $(".floor-plan").removeClass('d-flex');
  //     $(".floor-plan").addClass('d-none');
  //     $(".floor-plan-tab").removeClass('active');
  // }) ;
  // $(".floor-plan-tab").click(function(){
  //     $(".floor-plan").addClass('d-flex');
  //     $(".floor-plan-tab").addClass("active");
  //     $(".overview").removeClass('d-flex');
  //     $(".overview").addClass('d-none');
  //     $(".overview-tab").removeClass('active');
  //     $(".amenities").removeClass('d-flex');
  //     $(".amenities").addClass('d-none');
  //     $(".amenities-tab").removeClass('active');
  //     $(".in-room-media").removeClass('d-flex');
  //     $(".in-room-media").addClass('d-none');
  //     $(".in-room-media-tab").removeClass('active');
  // }) ;
  if ($(window).width() >= 992) {
    $(".room-contents").addClass("d-flex");
    $(".room-contents").removeClass("d-block");
  } else {
    $(".room-contents").addClass("d-block");
    $(".room-contents").removeClass("d-flex");
  }
  $(window).resize(function () {
    if ($(window).width() >= 992) {
      $(".room-contents").addClass("d-flex");
      $(".room-contents").removeClass("d-block");
    } else {
      $(".room-contents").addClass("d-block");
      $(".room-contents").removeClass("d-flex");
    }
  });
  if ($(window).width() >= 730) {
    $(".nav").addClass("justify-content-end");
    $(".nav").removeClass("justify-content-center");
  } else {
    $(".nav").addClass("justify-content-center");
    $(".nav").removeClass("justify-content-end");
  }
  $(window).resize(function () {
    if ($(window).width() >= 730) {
      $(".nav").addClass("justify-content-end");
      $(".nav").removeClass("justify-content-center");
    } else {
      $(".nav").addClass("justify-content-center");
      $(".nav").removeClass("justify-content-end");
    }
  });
  if ($(window).width() >= 1290) {
    $(".nav").addClass("justify-content-end");
    $(".nav").removeClass("justify-content-center");
  } else {
    $(".nav").addClass("justify-content-center");
    $(".nav").removeClass("justify-content-end");
  }
  $(window).resize(function () {
    if ($(window).width() >= 1290) {
      $(".booking-nav").show();
      $(".nav").addClass("justify-content-end");
      $(".nav").removeClass("justify-content-center");
    } else {
      $(".booking-nav").hide();
      $(".nav").addClass("justify-content-center");
      $(".nav").removeClass("justify-content-end");
    }
  });
  document.addEventListener("DOMContentLoaded", function () {
    new Splide("#secondary-slider", {
      fixedWidth: 100,
      height: 60,
      gap: 10,
      rewind: true,
      cover: true,
      pagination: false,
    }).mount();
  });
  $(".custom-thumbnail .col a").click(function () {
    $(".custom-thumbnail .thumbnail").removeClass("active");
    $slide = $(this).attr("data-slide-to");
    if ($(this).attr("data-slide-to") == $slide) {
      $(this).addClass("active");
    }
  });
  $(".carousel-indicators li").click(function () {
    $(".custom-thumbnail .thumbnail").removeClass("active");
    $slide = $(this).attr("data-slide-to");
    console.log($slide);
    $thumb = $(".custom-thumbnail .thumbnail").find(
      "[data-slide-to='" + $slide + "']"
    );

    $($thumb.prevObject[$slide]).addClass("active");
  });
  $("#carouselExampleSlidesOnly").mouseenter(function () {
    $("#carouselExampleSlidesOnly .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly").mouseleave(function () {
    $("#carouselExampleSlidesOnly .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly1").mouseenter(function () {
    $("#carouselExampleSlidesOnly1 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly1 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly1").mouseleave(function () {
    $("#carouselExampleSlidesOnly1 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly1 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly2").mouseenter(function () {
    $("#carouselExampleSlidesOnly2 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly2 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly2").mouseleave(function () {
    $("#carouselExampleSlidesOnly2 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly2 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly3").mouseenter(function () {
    $("#carouselExampleSlidesOnly3 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly3 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly3").mouseleave(function () {
    $("#carouselExampleSlidesOnly3 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly3 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly4").mouseenter(function () {
    $("#carouselExampleSlidesOnly4 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly4 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly4").mouseleave(function () {
    $("#carouselExampleSlidesOnly4 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly4 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly5").mouseenter(function () {
    $("#carouselExampleSlidesOnly5 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly5 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly5").mouseleave(function () {
    $("#carouselExampleSlidesOnly5 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly5 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly6").mouseenter(function () {
    $("#carouselExampleSlidesOnly6 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly6 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly6").mouseleave(function () {
    $("#carouselExampleSlidesOnly6 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly6 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly7").mouseenter(function () {
    $("#carouselExampleSlidesOnly7 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly7 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly7").mouseleave(function () {
    $("#carouselExampleSlidesOnly7 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly7 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly8").mouseenter(function () {
    $("#carouselExampleSlidesOnly8 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly8 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly9").mouseleave(function () {
    $("#carouselExampleSlidesOnly9 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly9 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly9").mouseenter(function () {
    $("#carouselExampleSlidesOnly9 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly9 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly9").mouseleave(function () {
    $("#carouselExampleSlidesOnly9 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly9 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly10").mouseenter(function () {
    $("#carouselExampleSlidesOnly10 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly10 .carousel-item:nth-child(2)").addClass(
      "active"
    );
  });
  $("#carouselExampleSlidesOnly10").mouseleave(function () {
    $("#carouselExampleSlidesOnly10 .carousel-item").removeClass("active");
    $("#carouselExampleSlidesOnly10 .carousel-item:nth-child(1)").addClass(
      "active"
    );
  });
  $(".experience-riyadh-card1").mouseenter(function () {
    $(".experience-riyadh-card1 .bottom-left").show();
  });
  $(".experience-riyadh-card1").mouseleave(function () {
    $(".experience-riyadh-card1 .bottom-left").hide();
  });
  $(".experience-riyadh-card2").mouseenter(function () {
    $(".experience-riyadh-card2 .bottom-left").show();
  });
  $(".experience-riyadh-card2").mouseleave(function () {
    $(".experience-riyadh-card2 .bottom-left").hide();
  });
  $(".experience-riyadh-card3").mouseenter(function () {
    $(".experience-riyadh-card3 .bottom-left").show();
  });
  $(".experience-riyadh-card3").mouseleave(function () {
    $(".experience-riyadh-card3 .bottom-left").hide();
  });
  $(".experience-riyadh-card4").mouseenter(function () {
    $(".experience-riyadh-card4 .bottom-left").show();
  });
  $(".experience-riyadh-card4").mouseleave(function () {
    $(".experience-riyadh-card4 .bottom-left").hide();
  });
  $(".experience-riyadh-card5").mouseenter(function () {
    $(".experience-riyadh-card5 .bottom-left").show();
  });
  $(".experience-riyadh-card5").mouseleave(function () {
    $(".experience-riyadh-card5 .bottom-left").hide();
  });
  $(".experience-riyadh-card6").mouseenter(function () {
    $(".experience-riyadh-card6 .bottom-left").show();
  });
  $(".experience-riyadh-card6").mouseleave(function () {
    $(".experience-riyadh-card6 .bottom-left").hide();
  });
  $(".experience-riyadh-card7").mouseenter(function () {
    $(".experience-riyadh-card7 .bottom-left").show();
  });
  $(".experience-riyadh-card7").mouseleave(function () {
    $(".experience-riyadh-card7 .bottom-left").hide();
  });
  $(".experience-riyadh-card8").mouseenter(function () {
    $(".experience-riyadh-card8 .bottom-left").show();
  });
  $(".experience-riyadh-card8").mouseleave(function () {
    $(".experience-riyadh-card8 .bottom-left").hide();
  });
  $(".experience-riyadh-card9").mouseenter(function () {
    $(".experience-riyadh-card9 .bottom-left").show();
  });
  $(".experience-riyadh-card9").mouseleave(function () {
    $(".experience-riyadh-card9 .bottom-left").hide();
  });
});
