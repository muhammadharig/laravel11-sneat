@extends('layouts.app')

@section('title', 'dashboard')

@section('main')
<div class="card mb-4">
    <h5 class="card-header">Tambah Data</h5>
    <hr class="my-0" />
    <div class="card-body">
        <form id="formAccountSettings" method="POST" onsubmit="return false">
            <div class="row">
                <div class="mb-3 col-md-3">
                    <label for="curr_lic_num" class="form-label">CURR_LIC_NUM</label>
                    <input class="form-control" type="text" id="curr_lic_num" name="curr_lic_num">
                </div>
                <div class="mb-3 col-md-3">
                    <label for="clnt_id" class="form-label">CLNT_ID</label>
                    <input class="form-control" type="text" name="clnt_id" id="clnt_id" />
                </div>
                <div class="mb-3 col-md-3">
                    <label for="appl_id" class="form-label">APPL_ID</label>
                    <input class="form-control" type="text" id="appl_id" name="appl_id"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="erp_pwr_dbm" class="form-label">ERP_PWR_DBM</label>
                    <input class="form-control" type="text" id="erp_pwr_dbm" name="erp_pwr_dbm"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="bwidth" class="form-label">BWIDTH</label>
                    <input class="form-control" type="text" id="bwidth" name="bwidth"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="bhp" class="form-label">BHP</label>
                    <input class="form-control" type="text" id="bwidth" name="bhp"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="eq_mdl" class="form-label">EQ_MDL</label>
                    <input class="form-control" type="text" id="eq_mdl" name="eq_mdl"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="ant_mdl" class="form-label">ANT_MDL</label>
                    <input class="form-control" type="text" id="ant_mdl" name="ant_mdl"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="hgt_ant" class="form-label">HGT_ANT</label>
                    <input class="form-control" type="text" id="hgt_ant" name="hgt_ant"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="master_plzn_code" class="form-label">MASTER_PLZN_CODE</label>
                    <input class="form-control" type="text" id="master_plzn_code" name="hgt_ant"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="sid_long" class="form-label">SID_LONG</label>
                    <input class="form-control" type="text" id="sid_long" name="sid_long"/>
                </div>
                <div class="mb-3 col-md-3">
                    <label for="sid_lat" class="form-label">SID_LAT</label>
                    <input class="form-control" type="text" id="sid_lat" name="sid_lat"/>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="mon_query" class="form-label">MON_QUERY</label>
                    <input class="form-control" type="date" id="mon_query" name="mon_query"/>
                </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>
@endsection
