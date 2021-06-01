import Sidebar from "../components/sibar_right";

const TemplateCoverLetter = {
    init() {
        Sidebar.__init();
        this.showListQuestionDropdown();
    },
    showListQuestionDropdown() {
        $('.js-profile-dropdown').click(function () {
            event.stopPropagation();
            $('.profile-dropdown ul').toggle();
        });

        $(document).on("click", function () {
            $('.profile-dropdown ul').hide();
        });
    },
};

$(function () {
    TemplateCoverLetter.init();
});


