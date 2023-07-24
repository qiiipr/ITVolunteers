<?php

if (!function_exists('render_event_image')) {

    function render_event_image($event_image)
    {
        $image_path = ($event_image)
            ? base_url() . 'events/image/' . $event_image
            : base_url() . 'assets/images/default-image.png';
        return $image_path;
    }
}

// a function to show if the event is active or not
if (!function_exists('event_status')) {
    function render_event_status($status)
    {
        if ($status == 1) {
            return "<span class='badge bg-primary ms-1'>Active</span>";
        } elseif ($status == 2) {
            return "<span class='badge bg-success ms-1'>done</span>";
        } else {
            return "<span class='badge bg-warning  ms-1'>Inactive</span>";
        }
    }
}

if (!function_exists('render_user_rate')) {
    function render_user_rate($rate)
    {
        $rate_section = "";
        switch ($rate) {
            case 1:
                $rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul>
                ';
                break;
            case 2:
                $rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul>
                ';
                break;
            case 3:
                $rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul>
                ';
                break;
            case 4:
                $rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul>
                ';
                break;
            case 5:
                $rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                </ul>
                ';
                break;
            default:
                $rate_section = '';
        }
        return $rate_section;
    }
}

if (!function_exists('render_average_rate')) {
    function render_average_rate($event_reviews)
    {
        $average_rate_section = "";

        $total = 0;
        foreach ($event_reviews as $event_review) {
            $total += $event_review->rate;
        }
        $average_rate = $total / count($event_reviews);

        if ($average_rate <= 1) {
            $average_rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul> (' . $average_rate . '/5)
                ';
        } elseif ($average_rate <= 2) {
            $average_rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul> (' . $average_rate . '/5)
                ';
        } elseif ($average_rate <= 3) {
            $average_rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul> (' . $average_rate . '/5)
                ';
        } elseif ($average_rate <= 4) {
            $average_rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="far fa-star text-warning"></i></li>
                </ul> (' . $average_rate . '/5)
                ';
        } elseif ($average_rate <= 5) {
            $average_rate_section = '
                <ul class="list-inline mb-1 text-s">
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item m-0"><i class="fas fa-star text-warning"></i></li>
                </ul> (' . $average_rate . '/5)
                ';
        }
        return $average_rate_section;
    }
}
