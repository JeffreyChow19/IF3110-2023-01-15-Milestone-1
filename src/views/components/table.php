<?php


function createTable($headers, $data) {
    $table = "<table class='table-size'><thead><tr>";

    // Add table headers
    foreach ($headers as $header) {
        $table .= "<td>{$header}</td>";
    }

    $table .= "</tr></thead><tbody>";

    // Add table data
    foreach ($data as $index => $item) {
        $displayIndex = $index + 1;
        $table .= "
            <tr class='clickable-row'>
                <td>{$displayIndex}</td>
                <td>
                    <a class='color-table' href='/poem/{$item['id']}'>
                        {$item['title']}
                    </a>
                </td>
                <td>{$item['creator_name']}</td>
                <td>{$item['genre']}</td>
                <td>{$item['year']}</td>
                <td>
                    <button onclick='deletePlaylistItem({$item['id']})'>
                        Delete
                    </button>
                </td>
            </tr>
        ";
    }

    $table .= "</tbody></table>";

    return $table;
}

function createTablePoem($headers, $poems) {
    $table = "<table class='table-size'><thead><tr>";

    // Add table headers
    foreach ($headers as $header) {
        $table .= "<td>{$header}</td>";
    }

    $table .= "</tr></thead><tbody>";

    // Add table data
    foreach ($poems as $index => $poem ) {
        $displayIndex = $index + 1;
        $table .= "
            <tr class='clickable-row'>
                <td>{$displayIndex}</td>
                <td>{$poem['title']}</td>
                <td>{$poem['genre']}</td>
                <td>{$poem['year']}</td>

                <td><button class='delete-poem-list-button' data-id-delete-poem-list='{$poem['id']}' data-title-delete-poem-list='{$poem['title']}'><svg width='20px' height='20px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path d='M12 10V17M8 10V17M19 9H22M19 14H22M19 19H21M16 6V16.2C16 17.8802 16 18.7202 15.673 19.362C15.3854 19.9265 14.9265 20.3854 14.362 20.673C13.7202 21 12.8802 21 11.2 21H8.8C7.11984 21 6.27976 21 5.63803 20.673C5.07354 20.3854 4.6146 19.9265 4.32698 19.362C4 18.7202 4 17.8802 4 16.2V6M2 6H18M14 6L13.7294 5.18807C13.4671 4.40125 13.3359 4.00784 13.0927 3.71698C12.8779 3.46013 12.6021 3.26132 12.2905 3.13878C11.9376 3 11.523 3 10.6936 3H9.30643C8.47705 3 8.06236 3 7.70951 3.13878C7.39792 3.26132 7.12208 3.46013 6.90729 3.71698C6.66405 4.00784 6.53292 4.40125 6.27064 5.18807L6 6' stroke='#AA7c75' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'></path> </g></svg></button></td>
                <td><button class='update-poem-list-button' data-id-update-poem-list='{$poem['id']}' data-title-update-poem-list='{$poem['title']}'><svg width='20px' height='20px' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><g id='SVGRepo_bgCarrier' stroke-width='0'></g><g id='SVGRepo_tracerCarrier' stroke-linecap='round' stroke-linejoin='round'></g><g id='SVGRepo_iconCarrier'> <path d='M16 3.98999H8C6.93913 3.98999 5.92178 4.41135 5.17163 5.1615C4.42149 5.91164 4 6.92912 4 7.98999V17.99C4 19.0509 4.42149 20.0682 5.17163 20.8184C5.92178 21.5685 6.93913 21.99 8 21.99H16C17.0609 21.99 18.0783 21.5685 18.8284 20.8184C19.5786 20.0682 20 19.0509 20 17.99V7.98999C20 6.92912 19.5786 5.91164 18.8284 5.1615C18.0783 4.41135 17.0609 3.98999 16 3.98999Z' stroke='#AA7c75' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> <path d='M9 2V7' stroke='#AA7c75' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> <path d='M15 2V7' stroke='#AA7c75' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> <path d='M8 16H14' stroke='#AA7c75' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> <path d='M8 12H16' stroke='#AA7c75' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'></path> </g></svg></button></td>
            </tr>
        ";
    }

    $table .= "</tbody></table>";

    return $table;
}