# Passenger wallet log Excel was capped at 3000

The Export popup shows **from 1 - 20,000**, but `action_wallet_logs` fetched:

```php
passenger_wallet_logs(..., 0, 3000);
```

List page can show 6088 (or more). Excel only got 3000.

## Live paste

FILE: `application/classes/controller/manage.php`  
inside `action_wallet_logs`, the `if(isset($_SESSION['download_set']))` block.

**Quick fix** (enough for 1–20,000):

FIND:
```php
$all_company_list = $this->manage_model->passenger_wallet_logs(trim(Html::chars($keyword)), trim(Html::chars($status)),$recharge_type,$start_date,$end_date, $company,0,3000);
```

REPLACE:
```php
$all_company_list = $this->manage_model->passenger_wallet_logs(trim(Html::chars($keyword)), trim(Html::chars($status)),$recharge_type,$start_date,$end_date, $company,0,20000);
```

That uses the same dropdown (1–20,000). No Node change.

After paste: open Passenger Wallet Logs, Export XLS, from 1–20,000. Excel row count should match “Displayed 1-30 of N” (N, not 3000).
