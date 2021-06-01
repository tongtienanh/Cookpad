import AlphaList from "../../components/alpha_list";
import Sidebar from "../../../../../../../resources/assets/js/components/sibar_right";

const BrowseSkill = {
    init() {
        AlphaList.init();
    },
};

$(function () {
    Sidebar.__init();
    BrowseSkill.init();
});
