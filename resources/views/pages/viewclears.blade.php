<div id="page-wrapper">
    <div class="container-fluid">
        <div class="wrap">
            <div class="col-xs-12 dashboardtitle">
                <h1>CLEARS</h1>
            </div>
            <table id="clears-table" class="table tbldashboard">
                <thead>
                    <tr>
                        <th>Survey Date</th>
                        <th>Municipality</th>
                        <th>Province</th>
                        <th>Uploaded_By</th>
                        <th>Slope Material</th>
                        <th title="Vegetation">vF</th>
                        <th title="Frequency of slope failure">fF</th>
                        <th title="Shear strength reduction due to water">sRed</th>
                        <th title="Shear strength reduction due to poor drainage">dRed</th>
                        <th title="">Rain</th>
                        <th title="Land use">lF</th>
                        <th title="Slope rating">&alpha;Rating</th>
                        <th title="">Fs</th>
                        <th>updated_at</th>
                        <th>created_at</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($res as $r)
                        <tr>
                            <td>{{date('Y-m-d',strtotime($r->survey_date))}}</td>
                            <td>{{$r->municipality->name}}</td>
                            <td>{{$r->province->name}}</td>
                            <td>{{$r->user->first_name." ".$r->user->last_name}}</td>
                            <td>{{$r->sFactor}}</td>
                            <td>{{$r->vFactor}}</td>
                            <td>{{$r->fFactor}}</td>
                            <td>{{$r->sRed}}</td>
                            <td>{{$r->dRed}}</td>
                            <td>{{$r->rain}}</td>
                            <td>{{$r->lFactor}}</td>
                            <td>{{$r->alphaRating}}</td>
                            <td>{{$r->Fs}}</td>
                            <td>{{$r->updated_at}}</td>
                            <td>{{$r->created_at}}</td>
                            <td>#</td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
