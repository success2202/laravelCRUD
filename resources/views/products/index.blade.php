<!doctype html>
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta>
        <meta>
        <title>document</title>
    </head>
    <body>
        <h1>product</h1>
        <div>
            <table border="1">
                <tr> 
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                </tr>
                @foreach($products as $product)
                
                <tr>
                    <td>{($product->id)}</td>
                    <td>{($product->name)}</td>
                    <td>{($product->qty)}</td>
                    <td>{($product->price)}</td>
                    <td>{($product->description)}</td>
                </tr>
                @endforeach
            </table>
            index
        </div>


    </body>

</html>