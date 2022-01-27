<tr>
    <td>4.</td>
    <td class="flex items-center">
        <span><img src="{{ asset('svg/cannonball.svg') }}" class="w-4 mr-2">
        </span>Cannon Ball
    </td>
    <td id="resource-4-amount">{{ Auth::user()->cannonball }}</td>
    <td><span id="resource-4-price">{{ Auth::user()->period->cannonball }}</span>
    </td>
    <td class="flex items-center gap-x-1">
        <span class="fa fa-fw fa-minus cursor-pointer hover:text-gray-200" onclick="minSell('resource', 4);"></span>
        <input type="number" disabled onkeyup="refreshTotal();" name="cannonball" id="resource-4"
            class="w-12 bg-transparent text-center" value=0>
        <span class="fa fa-fw fa-plus cursor-pointer hover:text-gray-200" onclick="plusSell('resource', 4);"></span>
    </td>
</tr>
