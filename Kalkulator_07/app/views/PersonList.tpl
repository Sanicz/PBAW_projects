{extends file="app/views/templates/main.tpl"}
{block name=dbase}
    <div class="bottom-margin">
        <form class="pure-form pure-form-stacked" method="get" action="{$conf->app_root}/ctrl.php">
            <input type="hidden" name="action" value="personList">
            <legend>Opcje wyszukiwania</legend>
            <fieldset>
                <input type="text" placeholder="nazwisko" name="sf_surname" value="{$searchForm->surname}" /><br />
                <button type="submit" class="button">Filtruj</button>
            </fieldset>
        </form>
    </div>

{/block}

{block name=db2}

    <div class="bottom-margin">
        <a class="pure-button button-success" href="{$conf->action_root}personNew">+ Nowa osoba</a>
    </div>

    <table id="tab_people" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>imię</th>
            <th>nazwisko</th>
            <th>data ur.</th>
            <th>opcje</th>
        </tr>
        </thead>
        <tbody>
        {foreach $people as $p}
            {strip}
                <tr>
                    <td>{$p["name"]}</td>
                    <td>{$p["surname"]}</td>
                    <td>{$p["birthdate"]}</td>
                    <td>
                        <a style="color: #eeeeee;"class="button-small pure-button button-secondary" href="{$conf->action_url}personEdit&id={$p['idperson']}">Edytuj</a>
                        &nbsp;
                        <a style="color: #eeeeee;"class="button-small pure-button button-warning" href="{$conf->action_url}personDelete&id={$p['idperson']}">Usuń</a>
                    </td>
                </tr>
            {/strip}
        {/foreach}
        </tbody>
    </table>
    <div class="col-4 col-8-xsmall"><a href="{$conf->action_url}calcShow"   class="button primary " >Back to Calc</a></div>
    <div class="col-4 col-8-xsmall"><a style="margin-top: 10px" href="{$conf->action_url}personEdit"   class="button primary " >Back to Edit</a></div>
    {include file='messages.tpl'}
{/block}