$(document).ready(function () {
    $("#table").DataTable({
        fixedHeader: true,
        responsive: true,
        scrollX:        true,
        // scrollCollapse: true,
        paging:         true,
        fixedHeader:           {
            header: true,
            footer: true
        }
    });
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

// Rupiah Convert Input 

var rupiah = document.getElementById("rupiah");
var rupiahCalc = document.getElementById("rupiahCalc");

rupiah.addEventListener("keyup", function(e) {
  // tambahkan 'Rp.' pada saat form di ketik
  // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
  rupiah.value = formatRupiah(this.value, "");

});


/* Fungsi formatRupiah */
function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^.\d]/g, "").toString(),
      split = number_string.split(","),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
     if (ribuan) {
    separator = sisa ? "," : "";
    rupiah += separator + ribuan.join(",");
    }

    rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
}

function formatNonSymbol(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, "").toString(),
      split = number_string.split(""),
      sisa = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
     if (ribuan) {
    separator = sisa ? "" : "";
    rupiah += separator + ribuan.join(",");
    }

    rupiah = split[1] != undefined ? rupiah + "" + split[1] : rupiah;
    return prefix == undefined ? rupiah : rupiah ? "" + rupiah : "";
}

rupiah.addEventListener("keyup", function() {
    rupiahCalc.value = rupiah.value;
    rupiahCalc.value = rupiahCalc.value.replace(/,/g, "");
});





// End Rupiah Convert Input 

// login

// End Login
