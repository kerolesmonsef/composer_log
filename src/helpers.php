<?php
if (!function_exists('cc')) {
    function cc($var)
    {
        $json = json_encode($var);
        echo "
            <script>
                console.table({$json});
            </script>
        ";
    }
}
