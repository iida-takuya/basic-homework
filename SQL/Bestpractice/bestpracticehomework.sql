SELECT
    working_area,
    avg(commission),
    count(agent_name)
FROM
    agents
HAVING
    count(agent_name) < 3
GROUP BY
    working_area
ORDER BY
    2,3 DESC;
