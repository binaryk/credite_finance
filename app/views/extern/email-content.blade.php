<table>
	<tr>
		<td style="padding:10px">
			<p>
				Referitor la clientul <b>{{$client->nume}}</b>,<br/>
				El si-a completat formularul pe platforma.
			</p>
		</td>
	</tr>
	<tr>
		<td style="padding:10px">
			<table>
				<tr>
					<td style="text-align:left; padding-right:4px">Nume client: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ $client->nume . ' ' . $client->prenume }}</b><td>
				<tr>
				<tr>
					<td style="text-align:left; padding-right:4px">Email client: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ $client->email }}</b><td>
				<tr>
				<tr>
					<td style="text-align:left; padding-right:4px">Telefon client: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ $client->telefon }}</b><td>
				<tr>
				<tr>
					<td style="text-align:left; padding-right:4px">Pentru a edita acest client, accesati link-ul: <td>
					<td style="text-align:left; padding-left:4px"><b><a href="{{ URL::route('clienti-index', ['type' => $client->tip_client, 'edit' => $client->id]) }}">Editează</a></b><td>
				<tr>
			</table>
		</td>
	</tr>
</table>