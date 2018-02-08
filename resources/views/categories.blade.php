<head>
    <link rel="stylesheet" href="jquery.dataTables.min.css">
    {{--<script src="/public/js/jquery-3.2.1.min.js"></script>--}}
    {{--<script src="/public/js/CallPrice.js"></script>--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
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
        <tr align="center">
            <td> {{ $category->name }}</td>
            <td>
                <select style="width: 120px" id="name">
                    @foreach($category->component as $item)
                        <option value= {{$item->price}}> {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input style="width: 50px" type="number" id="quantity" name="quantity" value="1"> <br>
            </td>

            <td>
                <p id="price">
                    {{-- {{ \App\Component::query()->where('id', '=', myFunction())->pluck('price')}} --}}</p>
            </td>
        </tr>
    @endforeach
    <tr style="background-color: #0cdbb6">
        <td id="total" :align="left">
                  {{500}}
        </td>
    </tr>
    </tbody>
</table>