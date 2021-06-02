UPDATE `agents`
SET COMMISSION = COMMISSION -.02
WHERE
        `agents`.`AGENT_CODE` = (
        -- Subquery to select first agent code has smallest total payment 
        SELECT
            `customer`.`AGENT_CODE`
        FROM
            `customer`
        GROUP BY
            `customer`.`AGENT_CODE`
        ORDER BY
            SUM( `customer`.`PAYMENT_AMT` ) ASC
        LIMIT 1
    );
