-- Age Category 20-40
SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space, CustomerView WHERE CAST(Visit.entry_time as DATE)>'2020-12-30' AND Visit.nfc_id=CustomerView.nfc_id AND CustomerView.Age<41 AND Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC;

-- Age Category 41-60
SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space, CustomerView WHERE CAST(Visit.entry_time as DATE)>'2020-12-30' AND Visit.nfc_id=CustomerView.nfc_id AND CustomerView.Age>40 AND CustomerView.Age<60 AND Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC;

-- Age Category 61
SELECT Space.space_id, COUNT(Visit.space_id) AS Freq, Space.space_name, Space.space_descr FROM Visit, Space, CustomerView WHERE CAST(Visit.entry_time as DATE)>'2020-12-30' AND Visit.nfc_id=CustomerView.nfc_id AND CustomerView.Age>60 AND Visit.space_id=Space.space_id GROUP BY Visit.space_id ORDER BY Freq DESC;