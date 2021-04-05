def update_product(product):
    sql_update = ''' UPDATE contacts 
        SET first_name = ?,
            last_name = ?
        WHERE id = ?
    '''
    try:
        cursor = conn.cursor()
        cursor.execute(sql_update, contact)
        connection.commit()
    except Exception as e:
        print(e)
    finally: 
        print('Execute Update SQL successfully.')