<?php
/*Предположим, что у нас есть банк и нам необходимо отпределить логику перевода денежных средств со счета одного клиента на счет другого клиента. */
class AccountTransferTransactionScript
{
    public function checkAccountSender(Account $accountSender) {
        //проверка доступности счета, клиент не внесен в черный список банка по каким-либо причинам, наличие на счету необходимой суммы
    }

    public function checkAccountRecipient(Account $accountRecipient) {
        //проверка доступности счета, клиент не внесен в черный список банка по каким-либо причинам
    }

    public function holdSumFromSenderAccount(int $sum, Account $accountSender) {
        //удержание со счета отправителя нужной суммы
    }

    public function transferSumToRecipientAccount(int $sum, Account $accountRecipient) {
        //зачисление на счет получателя нужной суммы
    }
}

?>

<?php
//index.php

Account $accountSender = new Account(...);
Account $accountRecipient = new Account(...);
int sum = 10000;

AccountTransferTransactionScript $transfer = new AccountTransferTransactionScript();
$transfer.checkAccountSender($accountSender);
$transfer.checkAccountRecipient($accountRecipient);
$transfer.holdSumFromSenderAccount($sum, $accountSender);
$transfer.transferSumToRecipientAccount($sum, $accountRecipient);

?>