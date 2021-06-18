SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Visit.space_id, Visit.entry_time, Visit.exit_time, Space.space_descr FROM Customer, Visit, Space WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id;


SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Access.space_id, Access.start_time, Access.end_time, Space.space_descr FROM Customer, Access, Space WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id;