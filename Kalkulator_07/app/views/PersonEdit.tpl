{extends file="app/views/templates/main.tpl"}
{block name=dbase}
    <div class="bottom-margin">
        <form action="{$conf->action_root}personSave" method="post" class="pure-form pure-form-aligned">
            <fieldset>
                <legend>Dane osoby</legend>
                <div class="pure-control-group">
                    <label for="name">imię</label>
                    <input id="name" type="text" placeholder="imię" name="name" value="{$form->name}">
                </div>
                <div class="pure-control-group">
                    <label for="surname">nazwisko</label>
                    <input id="surname" type="text" placeholder="nazwisko" name="surname" value="{$form->surname}">
                </div>
                <div class="pure-control-group">
                    <label for="birthdate">data ur.</label>
                    <input id="birthdate" type="text" placeholder="data ur." name="birthdate" value="{$form->birthdate}">
                </div>
                <div style="margin-top: 10px"class="pure-controls">
                    <input type="submit" class="button primary" value="Save"/>
                    <a class="button primary" href="{$conf->action_root}personList">Back to List</a>
                </div>
            </fieldset>
            <input type="hidden" name="id" value="{$form->id}">
        </form>
        {include file='messages.tpl'}
    </div>
{/block}