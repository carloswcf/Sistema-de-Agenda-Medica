@extends("template")
@section("conteudo")

<div class="base-listas">
		<span class="titulo1"><a name="consulta"></a>Ver clientes</span>
		<div class="caixa">
		 <div class="colunas">
             <div class="col col6"> <span>Médico:</span> <b>Medico Teste</b>      </div>
             <div class="col col2"> <span>Data:  </span> <b>1010/2010  </b>    </div>
             <div class="col col2"> <span>Turno: </span> <b>Matutino</b>       </div>
		</div>		
		<div class="colunas">
             <div class="col col2"> <span>Limite:     </span> <b>30  </b>   </div>
             <div class="col col2"> <span>Inscritos:  </span> <b>10  </b>     </div>
             <div class="col col2"> <span>Confirmados:</span> <b>10   </b>     </div>
             <div class="col col2"> <span>Disponível: </span> <b>5</b>  </div>
           </div>		 
		</div>
		
		<div class="caixa">
		 <span class="tt2">Lista de pacientes</span>
			<table width="100%" cellpadding="0" cellspacing="0" class="tabela">			

            <thead>
            <tr>
                    
                    <th width="5%" align="center">ID:</th>
                    <th width="30%" align="center">Data</th>
                    <th width="60%" align="center">Nome:</th>
                    <th width="10%" align="center">confirmado:</th>
                    <th width="10%" align="center">Atender</th>
            </tr>
            </thead>
            <tbody>
               
                <tr>
                    <td align="center">1</td>
                    <td align="center">10/10/2010  </td>
                    <td align="center">Geraldo da Silva</td>
					<td align="center"><a href="" class="editar but">Confirmar</a></td>					
					<td align="center"><a href="" class="editar but">Atender</a></td>					
                </tr>
                   	


            </tbody>
     </table>
		</div>
		
</div>

@endsection
