SELECT
    working_area,
    avg(commission) AS AVG_COMMISSION
    count(agent_name) AS COUNT_AGENT_NAME
FROM
    agents
HAVING
    count(agent_name) < 3
GROUP BY
    working_area
ORDER BY
    AVG_COMMISSION,COUNT_AGENT_NAME DESC;

