<div>
    <livewire:toaster/>
    <div class="card mt-5">
        <div class="card-body">
            <div class="card-title mb-4 d-flex flex-row">
                <h3>Vouchers</h3>
                <x-a-button class="btn btn-success ml-3">
                    <x-slot name="others">
                        data-toggle="modal" data-target="#voucherModal" wire:click="$set('details', [])"
                    </x-slot>
                    <i class="fas fa-plus"></i> Add Voucher
                </x-a-button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row mb-4 mx-2">
                        <div class="col-md-2">
                            <label>Filter By:</label>
                            <select class="form-control" wire:model="filtered">
                                @foreach($accounts as $account)
                                    <option value="{{ $account['id'] }}">{{ $account['email'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <livewire:vouchers-table/>
                </div>
            </div>
        </div>
    </div>

    {{--Add--}}
    <x-modalform id="voucherModal" modalTitle="New Voucher" size="modal-xl">
        <div class="row px-2">
            <div class="col-md-4 mb-2"><label>Applicant Name</label><input type="text" class="form-control" wire:model="details.name"></div>
            <div class="col-md-4 mb-2"><label>Source</label><input type="text" class="form-control" wire:model="details.source"></div>
            <div class="col-md-4 mb-2"><label>Passport Refund</label><input type="text" class="form-control" wire:model="details.passport_refund"></div>
            <div class="col-md-6 mb-2"><label>Ticket</label><input type="text" class="form-control" wire:model="details.ticket"></div>
            <div class="col-md-6 mb-2"><label>Passporting Allowance</label><input type="text" class="form-control" wire:model="details.passporting_allowance"></div>
            <div class="col-md-6 mb-2"><label>Medical Allowance</label><input type="text" class="form-control" wire:model="details.medical_allowance"></div>
            <div class="col-md-6 mb-2"><label>Medical Follow-up</label><input type="text" class="form-control" wire:model="details.medical_follow_up"></div>
            <div class="col-md-4 mb-2"><label>Requirements</label><input type="text" class="form-control" wire:model="details.requirements"></div>
            <div class="col-md-4 mb-2"><label>Red Rebon NBI</label><input type="text" class="form-control" wire:model="details.red_rebon_nbi"></div>
            <div class="col-md-4 mb-2"><label>NBI Renewal</label><input type="text" class="form-control" wire:model="details.nbi_renewal"></div>
            <div class="col-md-4 mb-2"><label>TESDA Allowance</label><input type="text" class="form-control" wire:model="details.tesda_allowance"></div>
            <div class="col-md-4 mb-2"><label>PDOS</label><input type="text" class="form-control" wire:model="details.pdos"></div>
            <div class="col-md-4 mb-2"><label>Info Sheet</label><input type="text" class="form-control" wire:model="details.info_sheet"></div>
            <div class="col-md-4 mb-2"><label>OWWA Allowance</label><input type="text" class="form-control" wire:model="details.owwa_allowance"></div>
            <div class="col-md-4 mb-2"><label>Office Allowance</label><input type="text" class="form-control" wire:model="details.office_allowance"></div>
            <div class="col-md-4 mb-2"><label>Travel Allowance</label><input type="text" class="form-control" wire:model="details.travel_allowance"></div>
            <div class="col-md-4 mb-2"><label>Weekly Allowance</label><input type="text" class="form-control" wire:model="details.weekly_allowance"></div>
            <div class="col-md-4 mb-2"><label>NBI Refund</label><input type="text" class="form-control" wire:model="details.nbi_refund"></div>
            <div class="col-md-4 mb-2"><label>PSA Refund</label><input type="text" class="form-control" wire:model="details.psa_refund"></div>
            <div class="col-md-4 mb-2"><label>Fare Refund</label><input type="text" class="form-control" wire:model="details.fare_refund"></div>
            <div class="col-md-4 mb-2"><label>Fit To Work</label><input type="text" class="form-control" wire:model="details.fit_to_work"></div>
            <div class="col-md-4 mb-2"><label>Repat</label><input type="text" class="form-control" wire:model="details.repat"></div>
            <div class="col-md-4 mb-2"><label>Stamping</label><input type="text" class="form-control" wire:model="details.stamping"></div>
            <div class="col-md-4 mb-2"><label>Vaccine Fare</label><input type="text" class="form-control" wire:model="details.vaccine_fare"></div>
        </div>
        <x-slot name="button">
            <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click="store">Save changes</button>
        </x-slot>
    </x-modalform>
    {{--Edit--}}
    <x-modalform id="voucherEditModal" modalTitle="Edit Voucher" size="modal-xl">
        <div class="row px-2">
            <div class="col-md-4 mb-2"><label>Applicant Name</label><input type="text" class="form-control" wire:model="details.name"></div>
            <div class="col-md-4 mb-2"><label>Source</label><input type="text" class="form-control" wire:model="details.source"></div>
            <div class="col-md-4 mb-2"><label>Passport Refund</label><input type="text" class="form-control" wire:model="details.passport_refund"></div>
            <div class="col-md-6 mb-2"><label>Ticket</label><input type="text" class="form-control" wire:model="details.ticket"></div>
            <div class="col-md-6 mb-2"><label>Passporting Allowance</label><input type="text" class="form-control" wire:model="details.passporting_allowance"></div>
            <div class="col-md-6 mb-2"><label>Medical Allowance</label><input type="text" class="form-control" wire:model="details.medical_allowance"></div>
            <div class="col-md-6 mb-2"><label>Medical Follow-up</label><input type="text" class="form-control" wire:model="details.medical_follow_up"></div>
            <div class="col-md-4 mb-2"><label>Requirements</label><input type="text" class="form-control" wire:model="details.requirements"></div>
            <div class="col-md-4 mb-2"><label>Red Rebon NBI</label><input type="text" class="form-control" wire:model="details.red_rebon_nbi"></div>
            <div class="col-md-4 mb-2"><label>NBI Renewal</label><input type="text" class="form-control" wire:model="details.nbi_renewal"></div>
            <div class="col-md-4 mb-2"><label>TESDA Allowance</label><input type="text" class="form-control" wire:model="details.tesda_allowance"></div>
            <div class="col-md-4 mb-2"><label>PDOS</label><input type="text" class="form-control" wire:model="details.pdos"></div>
            <div class="col-md-4 mb-2"><label>Info Sheet</label><input type="text" class="form-control" wire:model="details.info_sheet"></div>
            <div class="col-md-4 mb-2"><label>OWWA Allowance</label><input type="text" class="form-control" wire:model="details.owwa_allowance"></div>
            <div class="col-md-4 mb-2"><label>Office Allowance</label><input type="text" class="form-control" wire:model="details.office_allowance"></div>
            <div class="col-md-4 mb-2"><label>Travel Allowance</label><input type="text" class="form-control" wire:model="details.travel_allowance"></div>
            <div class="col-md-4 mb-2"><label>Weekly Allowance</label><input type="text" class="form-control" wire:model="details.weekly_allowance"></div>
            <div class="col-md-4 mb-2"><label>NBI Refund</label><input type="text" class="form-control" wire:model="details.nbi_refund"></div>
            <div class="col-md-4 mb-2"><label>PSA Refund</label><input type="text" class="form-control" wire:model="details.psa_refund"></div>
            <div class="col-md-4 mb-2"><label>Fare Refund</label><input type="text" class="form-control" wire:model="details.fare_refund"></div>
            <div class="col-md-4 mb-2"><label>Fit To Work</label><input type="text" class="form-control" wire:model="details.fit_to_work"></div>
            <div class="col-md-4 mb-2"><label>Repat</label><input type="text" class="form-control" wire:model="details.repat"></div>
            <div class="col-md-4 mb-2"><label>Stamping</label><input type="text" class="form-control" wire:model="details.stamping"></div>
            <div class="col-md-4 mb-2"><label>Vaccine Fare</label><input type="text" class="form-control" wire:model="details.vaccine_fare"></div>
        </div>
        <x-slot name="button">
            <button type="button" class="btn btn-primary" data-dismiss="modal" wire:click="store">Update</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click="destroy">Delete</button>
        </x-slot>
    </x-modalform>
</div>
