<?php

    $url = "https://y9d9l5wr.directus.app/items/biodata?fields=nama,tgl_lahir,tinggi,berat,kota.nama,agama.nama";
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($curl);
    $hasil = json_decode($response, true);
    for ($x = 0; $x < 6; $x++){
        echo "<tbody class='u-table-body'>";
        if ($x >= 0){
        echo "<tr style='height: 75px;'>";
        echo "<td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>".$hasil['data'][$x]['nama']."</td>";
        echo "<td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>".$hasil['data'][$x]['tgl_lahir']."</td>";
        // <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"></td>
        // <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"></td>
        // <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"></td>
        // <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell"></td>
        echo "<td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>";
            echo "<a class='u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1' href='Update.html' data-page-id='621100634'>Edit</a>";
        echo "</td>";
        // <td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell u-table-cell-16">
        //     <a class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-2" href="https://nicepage.com/k/auction-website-templates">Delete</a>
        // </td>
      echo "</tr>";
      echo "</tbody>";
        }
        
    }
?>