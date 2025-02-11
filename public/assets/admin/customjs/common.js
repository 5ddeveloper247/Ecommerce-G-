//  ____________________SideBar________________________
//  <script>
//     $(document).ready(function() {
//         function checkScreenSize() {
//             if ($(window).width() < 992) {
//                 $('.sidebar').hide();
//             } else {
//                 $('.sidebar').show();
//             }
//         }

//         // Check on initial load
//         checkScreenSize();

//         // Check on resize
//         $(window).resize(function() {
//             checkScreenSize();
//         });
//     });
// </script>

//  icon rotate
$(document).ready(function () {
    $(".main-links-for-submenu").on("click", function () {
        $(this)
            .find(".dropdown-indicator-icon-wrapper")
            .toggleClass("rotate-90");
    });

    $(".nav-link").on("click", function () {
        $(".nav-link-text").css("color", "");

        $(this).find(".nav-link-text").css("color", "#3874ff");
    });
});

//  sidebar collapse logics
document.getElementById("toggleSidebar").addEventListener("click", function () {
    const sidebar = document.querySelector(".sidebar");
    const collapseButton = document.querySelector(".sidebar-collapse-button");
    const forwardIcon = document.querySelector(".sidebar-forward-icon");
    const sidebarFooter = document.querySelector(".sidebar-footer");
    const contentSidebarCollapse = document.querySelector(
        ".sidebar-inner-content"
    );

    sidebar.classList.toggle("collapsed");

    if (sidebar.classList.contains("collapsed")) {
        collapseButton.style.display = "none";
        forwardIcon.style.display = "block";
        sidebarFooter.style.width = "80px";
        sidebarFooter.style.display = "flex";
        sidebarFooter.style.justifyContent = "center";
        $(".sidebar-inner-content").addClass("d-none");
        $(".sidebar-sub-links-bg").removeClass("px-5");
        $(".crm-dropdown").removeClass("d-none");
        $(".landing-dropdown").removeClass("d-none");
        $(".mail-dropdown").removeClass("d-none");
        $(".sidebar").css("overflow", "visible");
    } else {
        collapseButton.style.display = "block";
        forwardIcon.style.display = "none";
        sidebarFooter.style.width = "250px";
        sidebarFooter.style.display = "flex";
        sidebarFooter.style.justifyContent = "start";
        $(".sidebar-inner-content").removeClass("d-none");
        $(".sidebar-sub-links-bg").addClass("px-5");
        $(".crm-dropdown").addClass("d-none");
        $(".landing-dropdown").addClass("d-none");
        $(".mail-dropdown").addClass("d-none");
    }
});
//  dropdown mouse event none
$(document).ready(function () {
    $(".crm").hover(
        function () {
            $(".crm-dropdown").css("opacity", "1");
            $(".mail, .landing").addClass("disabled");
        },
        function () {
            $(".crm-dropdown").css("opacity", "0");
            $(".mail, .landing").removeClass("disabled");
        }
    );

    $(".mail").hover(
        function () {
            $(".mail-dropdown").css("opacity", "1");
            $(".crm, .landing").addClass("disabled");
        },
        function () {
            $(".mail-dropdown").css("opacity", "0");
            $(".crm, .landing").removeClass("disabled");
        }
    );

    $(".landing").hover(
        function () {
            $(".landing-dropdown").css("opacity", "1");
            $(".crm, .mail").addClass("disabled");
        },
        function () {
            $(".landing-dropdown").css("opacity", "0");
            $(".crm, .mail").removeClass("disabled");
        }
    );
});
//  ____________________SideBar Ends________________________

//  <h1>Footer</h1>

$(document).ready(function () {
    // Initialize Summernote
    $("#summernote").summernote({
        height: 210, // Initial height setting, adjust as needed
    });
});

ClassicEditor.create(document.querySelector("#editor")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor2")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor3")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor4")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor5")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor6")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor7")).catch((error) => {
    console.error(error);
});
ClassicEditor.create(document.querySelector("#editor8")).catch((error) => {
    console.error(error);
});

$(".add-statement-btn").on("click", function () {
    $(".add-statement").removeClass("d-none");
    // $(".add-option").addClass('d-none')
});
$(".add-option-btn").on("click", function () {
    $(".add-option").removeClass("d-none");
    // $(".add-statement").addClass('d-none')
});
$(".view-incoice").on("click", function () {
    $(".inoice-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-invoice-list").on("click", function () {
    $(".inoice-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-ticket").on("click", function () {
    $(".ticket-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-ticket-list").on("click", function () {
    $(".ticket-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-enroll-students").on("click", function () {
    $(".enroll-students-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-enroll-students-list").on("click", function () {
    $(".enroll-students-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-student-subscription").on("click", function () {
    $(".student-subscription-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-student-subscription-list").on("click", function () {
    $(".student-subscription-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-student-result").on("click", function () {
    $(".student-result-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-student-result-list").on("click", function () {
    $(".student-result-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".bank-form").on("click", function () {
    $(".bank-form-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-add-form").on("click", function () {
    $(".bank-form-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".audi-bank-form").on("click", function () {
    $(".audi-bank-form-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-audi-add-form").on("click", function () {
    $(".audi-bank-form-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".ppt-bank-form").on("click", function () {
    $(".ppt-bank-form-detail").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-ppt-add-form").on("click", function () {
    $(".ppt-bank-form-detail").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-exam-matrix-main-content").on("click", function () {
    $(".exam-matrix-main-content").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-products").on("click", function () {
    $(".exam-matrix-main-content").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-bowtie-main-content").on("click", function () {
    $(".bowtie-main-content").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-products").on("click", function () {
    $(".bowtie-main-content").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-cloze-main-content").on("click", function () {
    $(".cloze-main-content").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-products").on("click", function () {
    $(".cloze-main-content").addClass("d-none");
    $("#products").removeClass("d-none");
});
$(".view-rational-main-content").on("click", function () {
    $(".rational-main-content").removeClass("d-none");
    $("#products").addClass("d-none");
});
$(".back-to-products").on("click", function () {
    $(".rational-main-content").addClass("d-none");
    $("#products").removeClass("d-none");
});