@extends ('layouts.in')

@section ('body')

<form method="get">
    <div class="sm:flex">
        <div class="flex-grow mt-2 sm:mt-0">
            <input type="search" class="form-control form-control-lg" placeholder="{{ __('icon-index.filter') }}" data-table-search="#icon-list-table" />
        </div>

        <div class="mr-2 mt-2 sm:mt-0 bg-white overflow-hidden">
            <a href="{{ route('icon.create') }}" class="btn form-control-lg">{{ __('icon-index.create') }}</a>
        </div>
    </div>
</form>

<div class="overflow-auto md:overflow-visible header-sticky">
    <table id="icon-list-table" class="table table-report sm:mt-2 font-medium text-center whitespace-nowrap" data-table-sort data-table-pagination>
        <thead>
            <tr>
                <th class="w-1">{{ __('icon-index.icon') }}</th>
                <th class="text-right">{{ __('icon-index.name') }}</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($list as $row)

            @php ($link = route('icon.update', $row->name))

            <tr>
                <td class="w-1">
                    <a href="@asset($row->public)" class="app-logo" target="_blank"><img src="@image($row->public, 'resize,0,32')" class="app-logo"></a>
                </td>
                <td class="text-right"><a href="{{ $link }}" class="block font-semibold whitespace-nowrap">{{ $row->name }}</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

<div class="box mt-2 p-2 text-right">
    <a href="{{ route('icon.create') }}" class="btn form-control-lg">{{ __('icon-index.create') }}</a>
</div>

@stop
