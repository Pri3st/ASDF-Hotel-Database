-- Age Category 20-40
SELECT Service.service_id, COUNT(Service.service_id) AS Freq, Service.service_descr FROM Receive, Service, CustomerView WHERE CAST(Receive.charge_time as DATE)>'2020-12-30' AND Receive.nfc_id=CustomerView.nfc_id AND CustomerView.Age<41 AND Receive.service_id=Service.service_id AND Receive.service_id!='Rm2' AND Receive.service_id!='Rm4' GROUP BY Receive.service_id ORDER BY Freq DESC;

-- Age Category 41-60
SELECT Service.service_id, COUNT(Service.service_id) AS Freq, Service.service_descr FROM Receive, Service, CustomerView WHERE CAST(Receive.charge_time as DATE)>'2020-12-30' AND Receive.nfc_id=CustomerView.nfc_id AND CustomerView.Age>40 AND CustomerView.Age<61 AND Receive.service_id=Service.service_id AND Receive.service_id!='Rm2' AND Receive.service_id!='Rm4' GROUP BY Receive.service_id ORDER BY Freq DESC;

-- Age Category 61+
SELECT Service.service_id, COUNT(Service.service_id) AS Freq, Service.service_descr FROM Receive, Service, CustomerView WHERE CAST(Receive.charge_time as DATE)>'2020-12-30' AND Receive.nfc_id=CustomerView.nfc_id AND CustomerView.Age>60 AND Receive.service_id=Service.service_id AND Receive.service_id!='Rm2' AND Receive.service_id!='Rm4' GROUP BY Receive.service_id ORDER BY Freq DESC;