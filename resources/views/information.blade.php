@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <information></information>
    </div>
@endsection
<script>
    import Information from "../js/components/Pages/Information";
    export default {
        components: {Information}
    }
</script>
