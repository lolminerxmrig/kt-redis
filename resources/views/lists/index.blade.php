@extends('app')

@section('section_name', 'Lists')

@section('buttons_right')
<span class="ml-3 shadow-sm rounded-md">
  <a href="{{ route('lists.create') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-700 active:bg-blue-700 transition duration-150 ease-in-out">
    Create List
  </a>
</span>
@endsection

@section('content')
<div class="bg-white py-5 shadow overflow-hidden sm:rounded-md">
    <div class="px-4 flex items-center justify-between flex-wrap sm:flex-no-wrap">
      <div class="">

      </div>
  </div>

<div class="mt-4 flex flex-col">
  <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
    <div class="align-middle inline-block min-w-full  overflow-hidden sm:rounded-lg">
      <table class="min-w-full">
        <thead>
          <tr>
            <th class="px-3 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Name
            </th>
            <th class="px-3 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Leads
            </th>
            <th class="px-3 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
              Created At
            </th>
            <th class="px-3 py-3 border-b border-gray-200 bg-gray-50"></th>
          </tr>
        </thead>
        <tbody class="bg-white">
          @foreach($lists as $list)
            <tr>
              <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 font-medium text-gray-900">{{ $list->name }}</div>
              </td>
              <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-200">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                  {{ $list->leads_count }}
                </span>
              </td>
              <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900">{{ $list->created_at }}</div>
              </td>
              <td class="px-3 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
				<a href="{{ route('list.delete.index', $list) }}" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this list?');">Delete</a>&nbsp;
                <a href="{{ route('lists.show', $list) }}" class="text-blue-600 hover:text-blue-900">More</a>
              </td>
            </tr>
          @endforeach
		   @foreach($ulists as $list)
            <tr>
              <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-200 block">
                <div class="text-sm leading-5 font-medium text-gray-900">{{ $list->name }}</div>
              </td>
              <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-200">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                  {{ $list->leads_count }}
                </span>
              </td>
              <td class="px-3 py-4 whitespace-no-wrap border-b border-gray-200">
                <div class="text-sm leading-5 text-gray-900">{{ $list->created_at }}</div>
              </td>
              <td class="px-3 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
				<a href="{{ route('list.delete.index', $list) }}" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this list?');">Delete</a>&nbsp;
                <a href="{{ route('lists.show', $list) }}" class="text-blue-600 hover:text-blue-900">More</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

    {{-- @include('appointments.partials.appointments_list') --}}
</div>
@endsection
