<form class="form-horizontal" role="form" enctype="multipart/form-data" id="createItemByUser" v-on:submit.prevent>

    <fieldset title="Step1" class="step" id="default-step-0" style="display: block;">
        <legend>Item Details</legend>
        <!-- Name Field -->
        <div class="form-group" v-bind:class="{ 'has-error' : item_name.length < 1}">
            <label class="col-xs-2 control-label">Name</label>
            <div class="col-xs-10">
                <input v-model="item_name" type="text" name="item_name" class="form-control" placeholder="Name" required>
            </div>
        </div>

        <!-- Description Field -->
        <div class="form-group" v-bind:class="{ 'has-error' : item_description.description < 1}">
            <label class="col-xs-2 control-label">Description</label>
            <div class="col-xs-10">
                <textarea v-model="item_description" type="text" name="item_description" class="form-control" placeholder="description" required></textarea>
            </div>
        </div>

        <!-- Price Field -->
        <div class="form-group" v-bind:class="{ 'has-error' : item_description.price < 1}">
            <label class="col-xs-2 control-label">Price</label>
            <div class="col-xs-10 input-group">
                <span class="input-group-addon">RM</span>
                <input v-model="item_price" type="number" name="item_price" class="form-control" placeholder="Price" required>
            </div>
        </div>

        <!-- Img  -->
        <div class="form-group" v-bind:class="{ 'has-error' : item_image}">
            <label class="col-xs-2 control-label">Image</label>
            <div class="col-lg-4">
                <input v-model="item_image" type="file" name="item_image" class="form-control-file btn btn-white btn-file" placeholder="" required>
            </div>
        </div>

        <!-- Item Categories Id Field -->
        <div class="form-group" v-bind:class="{ 'has-error' : item_categories_id.length < 1}">
            <label class="col-xs-2 control-label">Item Categories</label>
            <div class="col-xs-10">
                <select v-model="item_categories_id" name="item_categories_id" class="form-control" required>
                    <option value="1">Watchs</option>
                    <option value="2">Watchs</option>
                    <option value="3">Others</option>
                </select>
            </div>
        </div>

    </fieldset>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button v-on:click="CreateItemByUser()" v-if="item_name" type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
</form>