<head>
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/CallPrice.js') }}"></script>
</head>

<table id="category" border="1" align="center" width="50%">
    <thead>
    <tr style="background-color: #1c478b">
        <th>Groups</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
        <tr class="component-details" align="center">
            <td> {{ $category->name }}</td>
            <td>
                <select style="width: 120px" id="name">
                    @foreach($category->component as $item)
                        <option value= {{$item->id}}> {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input style="width: 50px" type="number" id="quantity" name="quantity" value="1"> <br>
            </td>

            <td>
                <p id="price"> </p>
            </td>
        </tr>
    @endforeach
    </tbody>
    <tr style="background-color: #0cdbb6">
        <td></td>
        <td></td>
        <td></td>
        <td id="total" :align="right" style="height: 20px; align-content: right"></td>
    </tr>
</table>