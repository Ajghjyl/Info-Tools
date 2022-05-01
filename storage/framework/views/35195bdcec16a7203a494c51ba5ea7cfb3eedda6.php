<form action="<?php echo e(route('admin.prospects.contacts.update', $prospect_id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group row">
        <label for="" class="col-md-3">Phone (Primary)</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="phone" value="<?php echo e($contact->phone); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Phone Mobile</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="phone_mobile" value="<?php echo e($contact->phone_mobile); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Fax</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="fax" value="<?php echo e($contact->fax); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Address</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="address" value="<?php echo e($contact->address); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Address 2</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="address_2" value="<?php echo e($contact->address_2); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Unit #</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="unit" value="<?php echo e($contact->unit); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">City</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="city" value="<?php echo e($contact->city); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Province / State / Region</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="province" value="<?php echo e($contact->province); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Postal Code / Zip Code</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="postal_code" value="<?php echo e($contact->postal_code); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="" class="col-md-3">Country</label>
        <div class="col-md-9">
            <input type="text" class="form-control" name="country" value="<?php echo e($contact->country); ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="" class="col-md-3">Additional Notes</label>
        <div class="col-md-9">
            <textarea name="notes" cols="30" rows="10" class="form-control"><?php echo e($contact->notes); ?></textarea>
        </div>
    </div>

    <button class="btn btn-primary float-right">Update Contact Details</button>
</form>


<?php /**PATH C:\laragon\www\Info-Tools\resources\views/admin/prospects/contacts/partials/edit-contact-form.blade.php ENDPATH**/ ?>