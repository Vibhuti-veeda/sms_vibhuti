<div>
    <div class="form-group">
        <p>
            <b>
                Below are the list of
            </b> 
            <b style="color: blue;"> 
                Upcoming 
            </b>
            <b>
                activities, kindly take necessary action.
            </b>
        </p>
    </div>
    @if(!is_null($responsibilityIds))
        @foreach($responsibilityIds as $rbik => $rbiv)
            @if(count($upComingActivity[$rbiv]) > 0)
               <p>
                    <strong>
                        Response Name:
                    </strong>
                    {{ ((!is_null($upComingActivity[$rbiv]->first()->response)) && ($upComingActivity[$rbiv]->first()->response->name != '')) ? $upComingActivity[$rbiv]->first()->response->name : '---' }}
                </p>

               

                <table style="border-collapse: collapse; border-spacing: 0; width: 85%; border: 1px solid;">
                    <tr>
                        <th style="color: blue;">
                            List of upcoming activities
                        </th>
                    </tr>
                    <tr style="border: 1px solid;">
                        <center>
                            <th style="border: 1px solid; width: 20px;">Sr.No</th>
                            <th style="border: 1px solid;">Study No</th>
                            <th style="border: 1px solid;">Activity Name</th>
                            <th style="border: 1px solid;">Schedule Start Date</th>
                            <th style="border: 1px solid;">Schedule End Date</th>
                            <th style="border: 1px solid;">Activity Status</th>
                        </center>
                    </tr>
                    @if(!is_null($upComingActivity[$rbiv])) 
                        @foreach($upComingActivity[$rbiv] as $uk => $uv)   
                            <center>
                                <tr style="border: 1px solid;">
                                    <td style="border: 1px solid;">{{ $loop->iteration }}</td>
                                    <td style="border: 1px solid;">
                                        {{ ((!is_null($uv->studyNo)) && ($uv->studyNo->study_no != '')) ? $uv->studyNo->study_no : '---' }}
                                    </td>
                                    <td style="border: 1px solid;">
                                        {{ ($uv->activity_name != '') ? $uv->activity_name : '---' }}
                                    </td>
                                    <td style="border: 1px solid;">
                                        {{ ($uv->scheduled_start_date != '') ? date('d M Y', strtotime($uv->scheduled_start_date)) : '---' }}
                                    </td>
                                    <td style="border: 1px solid;">
                                        {{ ($uv->scheduled_end_date != '') ? date('d M Y', strtotime($uv->scheduled_end_date)) : '---' }}
                                    </td>
                                    <td style="border: 1px solid;">
                                        {{ ($uv->activity_status != '') ? $uv->activity_status : '---' }}
                                    </td>
                                </tr>
                            </center>
                        @endforeach
                    @endif       
                </table>
                <br>
                <br>
            @else
                <table style="border-collapse: collapse; border-spacing: 0; width: 85%; border: 1px solid;">
                    <tr>
                        <th style="color: blue;">
                            No upcoming activities this week
                        </th>
                    </tr>
                </table>
            @endif
        @endforeach
    @endif  
</div>