function FillTheTable(response) {
    var Retval;
    retval = 
    `<br>
     <hr>
    <table id='results' border=1>    
    <tr>
        <th rowspan=2>Διάρκεια</th>
        <th colspan=2>Αναχώρηση</th>
        <th colspan=2>Άφιξη</th>
        <th colspan=3>Πτήση</th>
        <th colspan=2 rowspan=2 >Θέση</th>
        <th rowspan=2>Διαθέσιμες<br>θέσεις</th>
        <th colspan=3>Συν. Κόστος</th>
    </tr>
    <tr>
        <th>Αεροδρόμιο</th>
        <th>Ώρα</th>
        <th>Αεροδρόμιο</th>
        <th>Ώρα</th>
        <th>Airline</th>
        <th>Αριθμός</th>
        <th>Αεροσκάφος</th>
        <th>Total Price</th>
        <th>Total Fare</th>
        <th>Tax</th>
    </tr>`

    var flights_sum=0;

    $.each(response.results, function(key, results) {
        
        retval += ` <tr> `;
  
        $.each(results.itineraries, function(key1, itirenaries) {

            var dromologia=itirenaries.outbound.flights.length;

            var duration = itirenaries.outbound.duration.split(":");

            var totallines=dromologia;

            if (itirenaries.inbound !== undefined) {
                totallines+=itineraries.inbound.flights.length;
            }

            flights_sum++;

            retval+=`<td align=center rowspan=` + dromologia + `><b>Μετάβαση</b><br>` + duration[0] + `ώ ` + duration[1] + `λ<br>`;

        });
    });

    return retval;


        //         echo("<td align=center rowspan=".$dromologia."><b>Μετάβαση</b><br>".$duration[0]."ώ ".$duration[1]."λ<br>");
                
        //         if($dromologia == 1) 
        //             echo("<b>Απευθείας πτήση</b></td>");
        //         else
        //             echo("<b>".($dromologia - 1).(($dromologia - 1)>1?" στάσεις":" στάση")."</b></td>");
                
        //         $index=0;
                
        //         foreach($itineraries->outbound->flights as $flights) {

        //             if($index > 0) echo("<tr>");
                                                
        //             echo("<td align=center>".$flights->origin->airport."<br>".find_airport($flights->origin->airport)."</td>");
                    
        //             $departure=explode("T", $flights->departs_at);
        //             $tmp_departure_date = explode("-", $departure[0]);
        //             $departure_date = $tmp_departure_date[2]."/".$tmp_departure_date[1]."/".$tmp_departure_date[0];
        //             $departure_time = $departure[1];
        //             echo("<td align=center>".$departure_date."<br>".$departure_time."</td>");
                    
        //             echo("<td align=center>".$flights->destination->airport."<br>".find_airport($flights->destination->airport)."</td>");
                    
        //             $arrival=explode("T", $flights->arrives_at);
        //             $tmp_arrival_date = explode("-", $arrival[0]);
        //             $arrival_date = $tmp_arrival_date[2]."/".$tmp_arrival_date[1]."/".$tmp_arrival_date[0];
        //             $arrival_time = $arrival[1];
        //             echo("<td align=center>".$arrival_date."<br>".$arrival_time."</td>");
                    
        //             echo("<td align=center>".$flights->operating_airline."<br>".find_airline($flights->operating_airline)."</td>");
        //             echo("<td align=center>".$flights->flight_number."</td>");
        //             echo("<td align=center>".$flights->aircraft."</td>");
        //             echo("<td align=center>".$flights->booking_info->travel_class."</td>");
        //             echo("<td align=center>".$flights->booking_info->booking_code."</td>");
        //             $seats=$flights->booking_info->seats_remaining;
        //             if($flights->booking_info->seats_remaining==9) $seats=">=9";
        //             echo("<td align=center>".$seats."</td>");

        //             if($index == 0) echo("<td align=center rowspan=".$totallines.">".$results->fare->total_price."</td>");
        //             if($index == 0) echo("<td align=center rowspan=".$totallines.">".$results->fare->price_per_adult->total_fare."</td>");
        //             if($index == 0) echo("<td align=center rowspan=".$totallines.">".$results->fare->price_per_adult->tax."</td>");

        //             echo("</tr>");
                    
        //             $index++;
        //         }
                
        //         If(isset($itineraries->inbound)) {

        //             $dromologia=count($itineraries->inbound->flights);
        //             $duration = explode(":", $itineraries->inbound->duration);
                    
        //             echo("<td align=center rowspan=".$dromologia."><b>Επιστροφή</b><br>".$duration[0]."ώ ".$duration[1]."λ<br>");
        //             if($dromologia == 1) 
        //                 echo("<b>Απευθείας πτήση</b></td>");
        //             else
        //                 echo("<b>".($dromologia - 1).(($dromologia - 1)>1?" στάσεις":" στάση")."</b></td>");
                    
        //             $index=0;

        //             foreach($itineraries->inbound->flights as $flights) {
        //                 if($index > 0) echo("<tr>");
                        
        //                 echo("<td align=center>".$flights->origin->airport."<br>".find_airport($flights->origin->airport)."</td>");
                        
        //                 $departure=explode("T", $flights->departs_at);
        //                 $tmp_departure_date = explode("-", $departure[0]);
        //                 $departure_date = $tmp_departure_date[2]."/".$tmp_departure_date[1]."/".$tmp_departure_date[0];
        //                 $departure_time = $departure[1];
        //                 echo("<td align=center>".$departure_date."<br>".$departure_time."</td>");
                        
        //                 echo("<td align=center>".$flights->destination->airport."<br>".find_airport($flights->destination->airport)."</td>");
                        
        //                 $arrival=explode("T", $flights->arrives_at);
        //                 $tmp_arrival_date = explode("-", $arrival[0]);
        //                 $arrival_date = $tmp_arrival_date[2]."/".$tmp_arrival_date[1]."/".$tmp_arrival_date[0];
        //                 $arrival_time = $arrival[1];
        //                 echo("<td align=center>".$arrival_date."<br>".$arrival_time."</td>");
                        
        //                 echo("<td align=center>".$flights->operating_airline."<br>".find_airline($flights->operating_airline)."</td>");
        //                 echo("<td align=center>".$flights->flight_number."</td>");
        //                 echo("<td align=center>".$flights->aircraft."</td>");
        //                 echo("<td align=center>".$flights->booking_info->travel_class."</td>");
        //                 echo("<td align=center>".$flights->booking_info->booking_code."</td>");

        //                 $seats=$flights->booking_info->seats_remaining;
        //                 if($flights->booking_info->seats_remaining==9) $seats=">=9";
        //                 echo("<td align=center>".$seats."</td>");
                        
        //                 echo("</tr>");

        //                 $index++;
        //             }
        //         }
                
        //         echo('<tr><td colspan=14 style="background: lightblue; line-height:0.01;">&nbsp;</td></tr>');						
        //     }
        // }
        // echo('</table>');

};
