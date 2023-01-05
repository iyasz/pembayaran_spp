$(document).ready(function () {
    $("table").DataTable();
});

// chart js

const ctx = document.getElementById("myChart");
const plugin = {
  id: 'customCanvasBackgroundColor',
  beforeDraw: (chart, args, options) => {
    const {ctx} = chart;
    ctx.save();
    ctx.globalCompositeOperation = 'destination-over';
    ctx.fillStyle = options.color || '#fff';
    ctx.fillRect(0, 0, chart.width, chart.height);
    ctx.restore();
  }
};

new Chart(ctx, {
    type: "bar",
    data: {
        labels: ["2018", "2019", "2020", "2021", "2022", "2023"],
        datasets: [
            {
                label: "Total",
                data: [563, 497, 548, 611, 571, 640],
                borderWidth: 1,
            },
        ],
    },
    options: {

        scales: {
            y: {
                beginAtZero: true,
            },
        },
        plugins: {
          customCanvasBackgroundColor: {
            color: 'white',
          }
        },
    },
    plugins: [plugin],
});

// end chart js

// swiper js

const swiper = new Swiper(".swiper", {
    direction: "horizontal",
    spaceBetween: 50,
    breakpoints: {
        767: {
            slidesPerView: 1,
        },
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
    },
});

// end swiper js

// sidebars
document.addEventListener("DOMContentLoaded", function (event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId);

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener("click", () => {
                // show navbar
                nav.classList.toggle("show");
                // change icon
                toggle.classList.toggle("bx-x");
                // add padding to body
                bodypd.classList.toggle("body-pd");
                // add padding to header
                headerpd.classList.toggle("body-pd");
            });
        }
    };

    showNavbar("header-toggle", "nav-bar", "body-pd", "header");

    // Your code to run since DOM is loaded and ready
});

// end sidebasr

// login

// End Login
