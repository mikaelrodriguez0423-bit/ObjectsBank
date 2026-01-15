<?php
// require the php class account and customer
require_once 'classes/Account.php';
require_once 'classes/Customer.php';

// for the account num, type and balance
$Accounts = [
    new Account('232-12345', 'Savings Account', 24250.75),
    new Account('232-67899', 'Family Account', 10500.00),
    new Account('232-24680', 'Investment Account', 12000.50),
    new Account('232-22222', 'Credit Card', -3500.00)
];

// for customer name
$Customer = new Customer(
    'Mikael','Rodriguez','mikaelrodriguez23@email.com',$Accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>MDTM Hands-On Mod4 - Objects & Classes</title>
</head>
<body>
    <img src="img/logo.png" alt="Bank Logo" class="bank-logo">
    <h1><?php echo $Customer->getFullName(); ?>'s Accounts</h1>
    <Section>
    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance (₱)</th>
        </tr>
        <?php foreach ($Customer->getAccounts() as $account): ?>
        <tr>
            <td><?php echo $account->getAccNumber(); ?></td>
            <td><?php echo $account->getAccType(); ?></td>
            <td class="<?php echo $account->isOverdrawn() ? 'overdrawn' : 'credit'; ?>">
                <?php echo number_format($account->getBalance(), 2); ?>
            </td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <th colspan="2">Total Balance</th>
            <th>₱<?php echo number_format($Customer->getTotalBalance(), 2); ?></th>
        </tr>
    </table>
    </Section>
</body>
</html>
<?php
// include footer
include 'includes/footer.php';
?>