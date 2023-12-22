<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["isFormErrors"] == "Y") : ?><?= $arResult["FORM_ERRORS_TEXT"]; ?><? endif; ?>
<?= $arResult["FORM_NOTE"] ?>
<? if ($arResult["isFormNote"] != "Y") {
?>
    <?= $arResult["FORM_HEADER"] ?>
    <div class="contact-form">
        <!-- Название и описание формы -->
        <div class="contact-form__head">
            <div class="contact-form__head-title"><?= $arResult["FORM_TITLE"] ?></div>
            <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"] ?></div>
        </div>
        <form class="contact-form__form" action="/" method="POST">
            <div class="contact-form__form-inputs">
                <!-- Поля заполнения -->
                <? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) { ?>
                    <? if ($arQuestion["CAPTION"] == "Сообщение") { ?>
                        <div class="contact-form__form-message">
                            <div class="input">
                                <label class="input__label">
                                    <div class="input__label-text">
                                        <?= $arQuestion["CAPTION"] ?>
                                    </div>
                                    <div class="input__input">
                                        <?= $arQuestion["HTML_CODE"] ?>
                                    </div>
                                </label>
                            </div>
                        </div>
                    <? } else { ?>
                        <div class="input contact-form__input">
                            <label class="input__label">
                                <div class="input__label-text">
                                    <?= $arQuestion["CAPTION"] ?>
                                    <? if ($arQuestion["REQUIRED"] == "Y") : ?><?= $arResult["REQUIRED_SIGN"]; ?><? endif; ?>
                                </div>
                                <div class="input__input">
                                    <?= $arQuestion["HTML_CODE"] ?>
                                </div>
                            </label>
                        </div>
                    <? }
                } ?>
            </div>
            <!-- Кнопка -->
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                    данных&raquo;.
                </div>
                <input class="form-button contact-form__bottom-button" type="submit" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"])); ?>" />
            </div>
        </form>
    </div>
    <?= $arResult["FORM_FOOTER"] ?>
<?
}
