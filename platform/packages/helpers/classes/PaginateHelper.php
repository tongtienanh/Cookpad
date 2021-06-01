<?php
class PaginateHelper
{
    public static function show($items)
    {
        return ' <p>Hiển thị '.($items->firstItem() ?? 0).' - '.($items->lastItem() ?? 0).' / '. $items->total().' records</p>';
    }

    public static function paginate($items, $quering = '')
    {
        return '<div class="custome-paginate">
                    <div class="pull-left">
                        <p style="margin-top: 20px;">Hiển thị '.($items->firstItem() ?? 0).' - '.($items->lastItem() ?? 0).' / '. $items->total().' records</p>
                    </div>
                    <div class="pull-right">' . $items->appends($quering)->render() . '</div>
                </div>';
    }
}
