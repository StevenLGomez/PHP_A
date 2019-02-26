
-- subjects table
INSERT INTO subjects (menu_name, position, visible) VALUES ('About Widget Corp', 1, 1);
INSERT INTO subjects (menu_name, position, visible) VALUES ('Products', 2, 1);
INSERT INTO subjects (menu_name, position, visible) VALUES ('Services', 3, 1);
INSERT INTO subjects (menu_name, position, visible) VALUES ('Misc', 4, 0);

-- pages table
INSERT INTO pages (subject_id, menu_name, position, visible, content)
    VALUES(1, 'Our Mission', 1, 1, 'Our mission has always been ...');
 
INSERT INTO pages (subject_id, menu_name, position, visible, content)
    VALUES(1, 'Our History', 2, 1, 'Founded in 1898 by two enterprising engineers ...');
 
INSERT INTO pages (subject_id, menu_name, position, visible, content)
    VALUES(2, 'Large Widgets', 1, 1, 'Our large widgets have to be seem to be believed...');
 
INSERT INTO pages (subject_id, menu_name, position, visible, content)
    VALUES(2, 'Small Widgets', 2, 1, 'They say big things come in small packages...');
 
INSERT INTO pages (subject_id, menu_name, position, visible, content)
    VALUES(3, 'Retrofitting', 1, 1, 'We love to replace widgets...');
 
INSERT INTO pages (subject_id, menu_name, position, visible, content)
    VALUES(3, 'Certification', 2, 1, 'We can certify any widget, not just our own...');
 
