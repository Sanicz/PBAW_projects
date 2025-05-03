{extends file="app/views/templates/main.tpl"}
{block name=main}
    <span style="float:right;">Użytkownik: {$user->login}, rola: {$user->role}</span>
            <form method="post" action="{$conf->action_root}calcCompute" id="myForm"  >
                <div class="row gtr-uniform gtr-50">
                    <div class="col-9 col-8-xsmall">
                        <input type="text" name="kwota" id="id_kwota" placeholder="Kwota" value="{$form->kwota}" /></div>
                    <div class="col-9 col-8-xsmall">
                        <input type="text" name="termin" id="id_termin" placeholder="Termin" value="{$form->termin}"/></div>
                    <div class="col-9 col-8-xsmall">
                        <input type="text" name="procentowanie" id="id_procentowanie" placeholder="Procentowanie" value="{$form->procentowanie}"/>
                    </div>
                    <div  class="col-4 col-8-xsmall"><input type="submit" value="Oblicz"  class="button primary fit " /></div>

                </div>
            </form>
    <div class="col-4 col-8-xsmall"><a href="{$conf->action_url}personEdit"   class="button primary " >DataBaseAdd</a></div>
    <div class="col-4 col-8-xsmall"style="margin-top: 20px"><a href="{$conf->action_url}personList"   class="button primary " >DataBaseList</a></div>
    <div class="col-4 col-8-xsmall"style="margin-top: 100px"><a href="{$conf->action_url}logout"   class="button primary " >Logout</a></div>


    <span style="float:right; margin-top: -570px;position: relative" >
                {include file='messages.tpl'}

                {if isset($res->result)}
                    <h4>Wynik</h4>
                    <p class="res">
                    {$res->result}
                    </p>
                {/if}   
    </span>
{/block}