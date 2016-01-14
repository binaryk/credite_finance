<table>
	<tr>
		<td style="padding:10px">
			<p>
				Dle/Dna {{ $client->nume .' ' . $client->prenume }}
			</p>
		</td>
	</tr>
	<tr>
		<td style="padding:10px">
			<table>
				<tr>
					<td style="text-align:left; padding-right:4px">Data dvs scadenta este: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ _toDate($client->data_scadentei) }}</b><td>
				<tr>
				<tr>
					<td style="text-align:left; padding-right:4px">Mai aveti pana la plata: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ $time }}</b><td>
				<tr>
				<tr>
					<td style="text-align:left; padding-right:4px">Euribor: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ $client->euribor_procent }}</b><td>
				<tr>
				<tr>
					<td style="text-align:left; padding-right:4px">Rata lunara: <td>
					<td style="text-align:left; padding-left:4px"><b>{{ $client->rata_lunara }}</b><td>
				<tr>
			</table>
		</td>
	</tr>
</table>