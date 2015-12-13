<div class="col-md-12">
    <p><div class="col-md-3">{{ $controls[0]->out() }}</div></p>
    <div class="clearfix"></div>
    <p>
        <b>
            Stimate d-le <u><span ng-bind="nume_client"></span></u>
            <br>
            Asa cum am stabilit, in urma informatiilor furnizate de dumneavoastra,
            echipa noastra a realizat calcule comparative la mai multe banci pentru a obtine conditii de creditare competitive.
            Va prezentam in continuare cateva oferte ale bancilor care le-am considerat cele mai potrivite pentru dumneavoastra din punct de vedere al costurilor.
        </b>
    </p>
</div>
<table class="table table-bordered table-hovered">
    <thead>
    <tr>
        <td><h4>Costuri de creditare</h4></td>
        <td><h4>Oferta 1 </h4></td>
        <td><h4>Oferta 2 </h4></td>
        <td><h4>Oferta 3 </h4></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Banca</td>
        <td>{{ $controls[1]->out() }}</td>
        <td>{{ $controls[2]->out() }}</td>
        <td>{{ $controls[3]->out() }}</td>
    </tr>
    <tr>
        <td>Tipul Creditului:</td>
        <td>{{ $controls[4]->out() }}</td>
        <td>{{ $controls[5]->out() }}</td>
        <td>{{ $controls[6]->out() }}</td>
    </tr>
    </tbody>
</table>