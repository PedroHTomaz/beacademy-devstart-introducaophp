
<form action="" method="POST">   
    <input type="text" name="nome" placeholder="Nome...">
    <input type="text" name="idade" placeholder="Idade...">
    <button>Enviar Dados</button>
</form>
    
    <table>
        <caption>Tabela com dados do PHP</caption>
        <tr>

            <th>Nome</th>
            <th>Idade</th>
            
            <tr>
                <td><?php echo $_POST["nome"];?></td>
                <td><?php echo $_POST["idade"];?></td>
            </tr>

        </tr>
    </table>