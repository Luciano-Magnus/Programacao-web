<h1>Lista de Clientes</h1>

<table class='table table-striped'>
    <tr>
        <th>ID Clientes</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Email</th>
        <th>Endereço</th>
    </tr>
    <?php
    foreach ($arrayClientes as $clientes) {
    ?>
        <tr>
            <td>
                <?=$clientes['idClient']?>
            </td>
            <td>
                <?=$clientes['name']?>
            </td>
            <td>
                <?=$clientes['phone']?>
            </td>
            <td>
                <?=$clientes['email']?>
            </td>
            <td>
                <?=$clientes['address']?>
            </td>
        </tr>
    <?php
    }
    ?>
</table>