<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

if ($arResult["isFormErrors"] == "Y") : ?> <div class="errors"><?= $arResult["FORM_ERRORS_TEXT"]; ?></div><? endif; ?>
<?= $arResult["FORM_NOTE"] ?>
<? if ($arResult["isFormNote"] != "Y") {
?>
    <?= $arResult["FORM_HEADER"] ?>
    <input type="hidden" name="web_form_submit" value="Y">

    <div class="contact-form">
        <!-- Название и описание формы -->
        <div class="contact-form__head">
            <div class="contact-form__head-title"><?= $arResult["FORM_TITLE"] ?></div>
            <div class="contact-form__head-text"><?= $arResult["FORM_DESCRIPTION"] ?></div>
        </div>
        <!-- Поля -->
        <form class="contact-form__form" action="/" method="POST">
            <div class="contact-form__form-inputs">
                <div class="input contact-form__input">
                    <label class="input__label" for="name">
                        <div class="input__label-text">Ваше имя*</div>
                        <input class="input__input" type="text" id="name" name="form_text_8" value="" required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="company">
                        <div class="input__label-text">Компания/Должность*</div>
                        <input class="input__input" type="text" id="company" name="form_text_9" value="" required="">
                        <div class="input__notification">Поле должно содержать не менее 3-х символов</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="email">
                        <div class="input__label-text">Email*</div>
                        <input class="input__input" type="email" id="email" name="form_email_10" value="" required="">
                        <div class="input__notification">Неверный формат почты</div>
                    </label>
                </div>
                <div class="input contact-form__input">
                    <label class="input__label" for="phone">
                        <div class="input__label-text">Номер телефона*</div>
                        <input class="input__input" type="tel" id="phone" data-inputmask="'mask': '+79999999999', 'clearIncomplete': 'true'" maxlength="12" x-autocompletetype="phone-full" name="form_text_11" value="" required="">
                    </label>
                </div>
            </div>
            <div class="contact-form__form-message">
                <div class="input">
                    <label class="input__label" for="message">
                        <div class="input__label-text">Сообщение</div>
                        <textarea class="input__input" type="text" id="message" name="form_textarea_12" value=""></textarea>
                    </label>
                </div>
            </div>
            <!-- Кнопка -->
            <div class="contact-form__bottom">
                <div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
                    ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
                    данных&raquo;.
                </div>
                <input type="hidden" class="inputtext" name="web_form_apply" value="Y">
                <input class="form-button contact-form__bottom-button" <?= (intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : ""); ?> type="submit" name="web_form_submit" value="<?= htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]); ?>" />
            </div>
        </form>
    </div>
    <?= $arResult["FORM_FOOTER"] ?>
<?
}
