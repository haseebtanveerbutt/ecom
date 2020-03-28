                                    {{-- QUERY BUILDER --}}
{{-- To get all data from table --}}
    $data = DB::table('user')->get();
{{-- to get all records in table where 'name' is 'taha' --}}
    $data = DB::table('user')->where('name','taha')->get();
{{-- to get record on base of id 3 etc --}}
    $data = DB::table('user')->find(3);
{{-- to get how many records are in 'user' table like 3,5 etc --}}
    $data = DB::table('user')->count();
{{-- to delete specfic record row where 'name' is 'taha'  --}}
    $data = DB::table('user')->where('name','taha')->delete();
{{-- to add record row in table --}}
    $data = DB::table('user')->insert(['name'=>'haseeb','email'=>'haseeb@gmail.com', 'address'=>'bilal gunj lahore']);
{{-- to update the specfic record row field --}}
    $data = DB::table('user')->where('name','taha')->update(['email'=>'haseebbutt@gmail.com']);
{{-- to avg,sum,max value --}}
    $data = DB::table('user')->avg('id'); or ->sum('id') or ->max('id');

                                    {{-- JOINS  --}}