<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('create.employee') }}">Tambah Data</a>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat Email</th>
                                <th>No Telepon</th>
                                <th>Domisili</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Risa Zahrani</td>
                                <td>rsszhrn@gmail.com</td>
                                <td>089812345</td>
                                <td>Bandung</td>
                                <td><a href="{{ route('detail.employee', 1) }}">Detail</a> <a
                                        href="{{ route('edit.employee', 1) }}">Edit</a> <a href="#">delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
