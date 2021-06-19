<html>
<head>
<title>Form Javascript</title>
</head>
<body>
    <h2>Transaksi</h2>
    <form name=”form_pemesanan” action=”#”>
    <table border=”1px”>
        <tr>
            <th width=”10px”>No</th>    
            <th width=”200px”>Makanan/Minuman</th>
            <th width=”100px”>Harga</th>
            <th width=”100px”>Pesan</th>
        </tr>

        <tr>
            <td>1</td>
            <td></td>
            <td>Rp
                <input type=”text”
                        name=
                        value=
                        size=”6″
                        readonly=”true”/> </td>  
            <td >
                    <input type=”text”
                        name=
                        value=
                        onKeyUp=”hitungPesan()”/></td>
        </tr>

        <tr>
            <td>2</td>
            <td></td>
            <td>Rp
                <input type=”text”
                    name=
                    value=
                    size=”6″
                    readonly=”true”/></td>
            <td>
                <input type=”text”
                    name=
                    value=
                    onKeyUp=”hitungPesan()”/></td>
        </tr>

        <tr>
            <td>3</td>
            <td></td>
            <td>Rp
                <input type=”text”
                    name=
                    value=
                    size=”6″
                    readonly=”true”/></td>
            <td>
                <input type=”text”
                    name=
                    value=
                    onKeyUp=”hitungPesan()”/></td>
        </tr>

        <tr>
            <td>4</td>
            <td></td>
            <td>Rp
                <input type=”text”
                    name=
                    value=
                    size=”6″
                    readonly=”true”/></td>
            <td>
                <input type=”text”
                    name=
                    value=
                    onKeyUp=”hitungPesan()”/></td>
        </tr>

        <tr>
            <td>5</td>
            <td></td>
            <td>Rp
                <input type=”text”
                    name=
                    value=
                    size=”6″
                    readonly=”true”/></td>
            <td>
                <input type=”text”
                    name=
                    value=
                    onKeyUp=”hitungPesan()”/></td>
        </tr>

        <tr>
            <td
                colspan=”3″
                align=”right”>Jumlah Total</td>
            <td>
                <input type=”text”
                    name=”Total”
                    readonly=”true” /></td>
        </tr>

        <tr>
            <td
                colspan=”3″
                align=”right”>Diskon</td>
            <td>
                <input type=”text”
                    name=”Diskon”
                    readonly=”true” /></td>
        </tr>

        <tr>
            <td
                colspan=”3″
                align=”right”> Jumlah Dibayar</td>
            <td>
                <input type=”text”
                name=”Bayar”
                readonly=”true”
                align=”right”/></td>
        </tr>

    </table>
    <p><input type="button" value="Batal">
    <p><input type="button" value="Proses">
</form>
</body>
</html>