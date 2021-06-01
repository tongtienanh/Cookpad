import Sidebar from "../components/sibar_right";

const Action = {
    init(){
        Sidebar.__init();
        this.showAnswer();
    },

    showAnswer() {
        $('.question .question-answer').click(function (e) {
            e.preventDefault();
            let $this = $(this),
                $dataId = $this.attr('href'),
                $dropdown = $($dataId + '.dropdown-question');

            if ($dropdown.hasClass('active')) {
                $dropdown.removeClass('active');
            } else {
                $('.dropdown-question').removeClass('active');
                $dropdown.addClass('active');
            }
        })
    }
};

$(function () {
    Action.init();
});
