import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import 'owl.carousel';

const OwlCarousel = {
    startOwlCarousel(element, options)
    {
        $(element).owlCarousel(options);
    },

    stopOwlCarousel(ele)
    {
        let $owl = $(ele);
        $owl.trigger('destroy.owl.carousel');
        $owl.addClass('off');
    },

    checkMode(width, element, options)
    {
        if ( $(window).width() > width )
        {
            this.startOwlCarousel(element, options);
            $(element).removeClass('off');
        }
        else
        {
            $(element).addClass('off');
        }

        $(window).resize(() =>
        {
            if ( $(window).width() > width )
            {
                this.startOwlCarousel(element, options);
                $(element).removeClass('off');
            }
            else
            {
                this.stopOwlCarousel(element);
            }
        });
    }
};

export default OwlCarousel;
