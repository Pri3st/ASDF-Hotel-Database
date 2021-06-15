1) Find what ammounts a Customer was charged

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, Charge.ammount FROM Customer, Receive, Service, Charge WHERE Customer.nfc_id=1 AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Charge.service_id AND Charge.charge_time=Receive.charge_time AND Customer.nfc_id=Charge.nfc_id

2) Find which Customers used a Service, their information and what they were charged for it

SELECT DISTINCT Customer.nfc_id, Customer.first_name, Customer.last_name, Customer.birthdate, Email.email_address, Phone.phone_number, Service.service_descr, Charge.charge_time, Charge.charge_descr, Charge.ammount FROM Customer, Email, Phone, Receive, Service, Charge WHERE Customer.nfc_id=Email.nfc_id AND Customer.nfc_id=Phone.nfc_id AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Customer.nfc_id=Charge.nfc_id AND Charge.service_id='G4'

3) Find which Customers used a Service and show information about them, the Service, the Space and their Charge for their Service

SELECT DISTINCT Customer.nfc_id, Customer.first_name, Customer.last_name, Customer.birthdate, Email.email_address, Phone.phone_number, Service.service_descr, Charge.charge_time, Charge.charge_descr, Charge.ammount, Space.space_name, Space.space_descr FROM Customer, Email, Phone, Receive, Service, Charge, Provided, Space WHERE Customer.nfc_id=Email.nfc_id AND Customer.nfc_id=Phone.nfc_id AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id AND Customer.nfc_id=Charge.nfc_id AND Charge.service_id='G4'

4) Find which Customers used a Specific Service (by Service ID) and show information about them, the Service, the Space and their Charging

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name FROM Customer, Service, Receive WHERE Service.service_id = '$search1' AND Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id;

5) Find which Customers used a Subscription Service of a specific Cost and show Service, the Space, their Charging and Subscription information

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, Charge.charge_time, Charge.charge_descr, Space.space_name, Space.space_descr, Subscribe.subscr_time FROM Customer, Receive, Service, Charge, Provided, Space, Subscription, Subscribe, Access WHERE Customer.nfc_id=Receive.nfc_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id AND Service.service_id=Subscription.subscr_id AND Subscription.subscr_id=Subscribe.subscr_id and Subscribe.nfc_id=Customer.nfc_id AND Customer.nfc_id=Charge.nfc_id AND Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id AND Charge.Ammount=$search1;

6) Find which Customers used a Complimentary Service of a specific Cost and show Service, the Space, their Charging and Subscription information

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Service.service_descr, Charge.charge_time, Charge.charge_descr, Space.space_name, Space.space_descr FROM Customer, Receive, Service, Charge, Provided, Space, Visit WHERE Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id AND Service.service_id=Charge.service_id AND Receive.charge_time=Charge.charge_time AND Service.service_id=Provided.service_id AND Provided.space_id=Space.space_id AND Customer.nfc_id=Charge.nfc_id AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id AND Service.service_id IN ('B1', 'B2', 'R1', 'R2', 'R3', 'R4', 'H1', 'H3') AND Charge.Ammount=$search1;

7) Covid-19 Tracking Query - Find Information about the Hotel Spaces a Customer has Visited

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Visit.space_id, Visit.entry_time, Visit.exit_time, Space.space_descr FROM Customer, Visit, Space WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Visit.nfc_id AND Visit.space_id=Space.space_id;

8) Covid-19 Tracking Query - Find Information about the Hotel Spaces a Customer has Access Customers

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, Access.space_id, Access.start_time, Access.end_time, Space.space_descr FROM Customer, Access, Space WHERE Customer.nfc_id = '$search1' AND Customer.nfc_id=Access.nfc_id AND Access.space_id=Space.space_id;

9) Services by Type View

CREATE VIEW ServicesbyTypeView AS SELECT Customer.nfc_id, Service.service_descr FROM Customer, Service, Receive WHERE Customer.nfc_id=Receive.nfc_id AND Receive.service_id=Service.service_id;

10) Services by Type View Query

SELECT ServicesbyTypeView.nfc_id, ServicesbyTypeView.first_name, ServicesbyTypeView.last_name FROM ServicesbyTypeView WHERE ServicesbyTypeView.service_id='$search1';

11) Customers Profiles View

CREATE VIEW Customer.View AS SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, TIMESTAMPDIFF(YEAR, Customer.birthdate, CURDATE()) AS Age FROM Customer;

12) Customers Profiles View Query

SELECT * from CustomerView;

13) Calculate Customers Ages

SELECT Customer.nfc_id, Customer.first_name, Customer.last_name, TIMESTAMPDIFF(YEAR, Customer.birthdate, CURDATE()) AS Age FROM Customer;

14) Find most Visited space_descr

SELECT space_id, COUNT(space_id) AS Freq FROM Visit GROUP BY space_id ORDER BY Freq DESC LIMIT 2;