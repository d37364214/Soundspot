document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuButton = document.getElementById("mobile-menu");
            const menu = document.querySelector(".menu");

                mobileMenuButton.addEventListener("click", function () {
                        menu.classList.toggle("active");
                            });
                            });
})